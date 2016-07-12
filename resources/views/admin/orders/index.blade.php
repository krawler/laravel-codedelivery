@extends('app')

@section('content')

<div class="container">

    <h3>Pedidos</h3>

<!--    <a href="{{ route('admin.orders.create')  }}" class="btn btn-default">Novo Pedido</a>
    <br/><br/>-->

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Data</th>
            <th>Entregador</th>
            <th>Itens</th>
            <th>Total</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->client->user->name}}</td>
            <td>{{$order->created_at}}</td>
            <td>
                @if($order->deliveryman)
                    {{$order->deliveryman->name}}
                @else
                    --
                @endif
            </td>
            <td>
                <ul>
                @foreach($order->items as $item)
                    <li>{{$item->product->name}}</li>
                @endforeach
                </ul>
            </td>
            <td>{{$order->total}}</td>
            <td>{{$order->status}}</td>
            <td>
                <a href="{{route('admin.orders.edit',['id'=>$order->id])}}" class="btn btn-default btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $orders->render() !!}

</div>

@endsection
