<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['penjualan.marketing'])->get();
        return response()->json($payments);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'transaction_number' => 'required|string|exists:penjualans,transaction_number|unique:payments',
            'payment_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $penjualan = Penjualan::where('transaction_number', $validatedData['transaction_number'])->firstOrFail();

        $validatedData['amount'] = $penjualan->grand_total;

        $payment = Payment::create($validatedData);
        return response()->json($payment, 201);
    }

    public function show($id)
    {
        $payment = Payment::with('penjualan')->findOrFail($id);
        return response()->json($payment);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'transaction_number' => 'required|string|exists:penjualans,transaction_number|unique:payments,transaction_number,' . $id,
            'payment_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $penjualan = Penjualan::where('transaction_number', $validatedData['transaction_number'])->firstOrFail();
        $validatedData['amount'] = $penjualan->grand_total;

        $payment = Payment::findOrFail($id);
        $payment->update($validatedData);
        return response()->json($payment);
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        if (is_null($payment)) {
            return response()->json('Payment not found', 404);
        }
        $payment->delete();
        return response()->json(null, 204);
    }
}
