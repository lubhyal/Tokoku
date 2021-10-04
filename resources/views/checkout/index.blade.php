@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <h3>CHECKOUT</h3>
            <hr>
            
            <form action="{{ route('checkout') }}" method="POST" id="checkout-form">
                @csrf
                <div class="row ">
                    
                    <div class="col-12">
                        <h5>RINCIAN PENGIRIMAN</h5>
                    </div>

                    <div class="col-12">
                        <label for="name" class="">{{ __('Nama Lengkap') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name ??'' }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phonenumber" class="">{{ __('Nomor Telepon') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') ?? $user->profile->phonenumber ??'' }}" required autocomplete="phonenumber" autofocus>
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="">{{ __('Alamat Email') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email ??'' }}" required autocomplete="country" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                        <h5>Pembayaran Kartu Kredit</h5>
                    </div>
                    

                    <div class="col-12">
                        <label for="creditcardnumber" class="">{{ __('Nomor Kartu kredit') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="creditcardnumber" type="text" class="form-control @error('creditcardnumber') is-invalid @enderror" name="creditcardnumber" value="{{ old('creditcardnumber') }}" required autocomplete="creditcardnumber" autofocus>
                                @error('creditcardnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="expiremonth" class="">{{ __('Bulan kadaluarsa') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="expiremonth" type="text" class="form-control @error('expiremonth') is-invalid @enderror" name="expiremonth" value="{{ old('expiremonth') }}" required autocomplete="expiremonth" autofocus>
                                @error('expiremonth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="expireyear" class="">{{ __('Tahun kadaluarsa') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="expireyear" type="text" class="form-control @error('expireyear') is-invalid @enderror" name="expireyear" value="{{ old('expireyear') }}" required autocomplete="expireyear" autofocus>
                                @error('expireyear')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12">
                        <label for="cvc" class="">{{ __('CVC') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="cvc" type="text" class="form-control @error('cvc') is-invalid @enderror" name="cvc" value="{{ old('cvc') }}" required autocomplete="cvc" autofocus>
                                @error('cvc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>
                
                <button type="submit" class="button-primary w-100">Bayar Sekarang</button>
            
            </form>
        </div>
    </div>
</div>

@endsection