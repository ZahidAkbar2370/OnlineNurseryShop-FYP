@extends('layout')
@section('content')



                <div class="container mt-5">
                      <div class="row text-center">
                          <div class="col-12">
                              <h3 class="text-center"> Cart</h3>
                          </div>
                      </div>
                      <div class="row">
                            <div class="col-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                  {{ session('success') }}
                                </div> 
                            @endif
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Product</th>
                                            <th style="width:10%">Price</th>
                                            <th style="width:8%">Quantity</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                                <tr data-id="{{ $id }}">
                                                    <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-3 hidden-xs"><img src="{{ asset($details['image']) }}" width="100" height="100" class="img-responsive"/></div>
                                                            <div class="col-sm-9">
                                                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-th="Price">RS{{ $details['price'] }}</td>
                                                    <td data-th="Quantity">
                                                        {{ $details['quantity'] }}
                                                        {{-- <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" /> --}}
                                                    </td>
                                                    <td data-th="Subtotal" class="text-center">RS{{ $details['price'] * $details['quantity'] }}</td>
                                                    <td class="actions" data-th="">
                                                        <a href="{{ url('customer/remove-cart/'.$details['id']) }}" class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i>Remove</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-right"><h3><strong>Total RS: {{ $total }}</strong></h3></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right">
                                                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                                <button class="btn btn-success">Checkout</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                      </div>



 @endsection