@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">  
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                
                    <h3>Your listings</h3>
                    @if (count((array)$listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{ $listings }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You don't have any listings yet!</p>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection