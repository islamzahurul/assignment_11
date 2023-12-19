

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>

                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">{{ __('Create Product') }}</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Price') }}</th>
                                    <th scope="col">{{ __('Quantity') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
