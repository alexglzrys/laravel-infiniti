<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Customer;
use App\Http\Requests\RegisterStoreRequest;
use App\Information;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Método de controlador encargado de mostrar la vista principal (home) del sitio
    public function index()
    {
        // La vista requiere todas las agencias para renderizarlas en el formulario (select) y en la sección de Nuestras Agencias.
        $agencies = Agency::all();
        return view('public.home', compact('agencies'));
    }

    // Método de controlador encargado de realizar el registro de un cliente
    public function register(RegisterStoreRequest $request)
    {
        $customer    = new Customer;
        $information = new Information;

        $customer->name                 = $request->input('name');
        $customer->agency_id            = $request->input('agency');
        $customer->terms_and_conditions = $request->input('terms_and_conditions', 0);
        $information->email             = $request->input('email');
        $information->phone             = $request->input('phone');

        DB::beginTransaction();
        try {
            // Intentar registrar al cliente, así como su información relacionada en la BD
            $customer->save();
            $customer->information()->save($information);
        } catch (\Exception $e) {
            // En caso de error, hacer rollback en la BD y avisar al cliente de lo sucedido
            DB::rollback();
            return back()->withError('Error en el servidor,<br>favor de intentar más tarde.');
            // return back()->withError($e->getMessage());
        }
        // Si todo es correcto, confirmar el registro de información en la BD y notificar al cliente.
        DB::commit();
        return back()->withSuccess('Gracias por registrarte,<br>en breve te contactaremos.');
    }

    // Método de controlador para buscar todos los clientes registros en la BD por Agencia
    public function customers($id)
    {
        // La vista a retornar por el controlador, hace uso del formulario de registro. Por tanto se necesita consultar a todas las agencias.
        $agencies = Agency::all();
        // Consultar la agencia seleccionada, y en la vista mostrar sus clientes asociados
        //
        // NOTA IMPORTANTE: ******* Optimizar esta consulta ************
        $agency = Agency::findOrFail($id);
        return view('public.customers', compact('agency', 'agencies'));
    }
}
