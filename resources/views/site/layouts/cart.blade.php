{{-- <a href="#" class="drop-toggle">
    <img src="{{ asset('assets/site/images/icon/login.svg') }}" alt="" class="img-fluid">
    <span class="my-cart">Faça Login ou <br>
        crie seu Cadastro</span>
    <span class="total-item">Ou Cadastre-se</span>
</a>
<a href="">
    <img src="{{ asset('assets/site/images/icon/messages.svg') }}" alt="" class="img-fluid">
</a>
<a href="">
    <img src="{{ asset('assets/site/images/icon/love.svg') }}" alt="" class="img-fluid">
</a> --}}

<div class="blockcart">
    <a href="#" class="drop-toggle">
        <img src="{{ asset('assets/site/images/cart/cart.svg') }}" alt="" class="img-fluid">
        <span class="count">{{App\Models\Order::order()->sum('qtd')}}</span>
    </a>
    <div class="cart-dropdown drop-dropdown">
        <ul>
            @forelse (App\Models\Order::order() as $item)
            <li class="mini-cart-details">
                <div class="innr-crt-img">
                    <img src="{{ url('storage/products/', $item->product->image_url) }}" alt="" width="80">
                    <span><a href="{{ route('delete.product.cart', ['id'=>$item->id]) }}"><i class="fa fa-remove"></i></a></span>
                </div>
                <div class="innr-crt-content">
                    <span class="product-name">
                        <a href="#">{{$item->product->name}}</a>
                    </span>
                    <span class="product-price">R$ {{number_format($item->product->price, 2, ',','.')}}</span>
                    {{-- <span class="product-size">Size: S</span> --}}
                </div>
            </li>
            @empty

            @endforelse
           
            <li>
                <span class="subtotal-text">Total</span>
                <span class="subtotal-price">R$  {{number_format(App\Models\Order::order()->sum('price'), 2, ',', '.') ?? '0'}}</span>
            </li>
        </ul>
        <div class="checkout-cart">
            <a href="{{ route('checkout') }}">Checkout</a>
        </div>
    </div>
</div>