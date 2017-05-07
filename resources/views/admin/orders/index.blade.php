@extends('app')

@section('content')

    <div class="container">
        <h3> Orders</h3>

    <!--<a href="{{route("admin.products.create")}}" class="btn btn-success"/>Novo Produto--></a>
        </br></br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Data</th>
                <th>Itens</th>
                <th>Entregador</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    {{--{{var_dump($order)}}--}}
                    <td>{{$order->id}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->created_at}}</td>

                    <td>
                        <ul>
                            @foreach($order->items as $item)
                                <li>{{$item->product->name}}</li>

                            @endforeach
                        </ul>
                    </td>
                    <td>
                        {{--{{dd($order->deliveryman)}}--}}
                        @if($order->deliveryman)
                            {{$order->deliveryman->name}}
                        @else
                            --
                        @endif
                    </td>
                    <td>
                        {{$order->status}}
                    </td>
                    <td>
                    <a href="{{route('admin.orders.edit',$order->id)}}" class="btn btn-default btn-sm"> Editar </a>
                    {{--<a href="{{route('admin.products.destroy',$product->id)}}" class="btn btn-default btn-sm"> Remover </a>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $orders->render() !!}
    </div>
@endsection