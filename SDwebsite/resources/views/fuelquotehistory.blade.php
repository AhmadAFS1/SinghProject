
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Quote History</div>
                    <div class = "card-body">

                            <div class="form-group row">
                                <div id="body_container">
                                    <div id="body_contents">
                                        <table>
                                            <tr>
                                                <th><label for="Gallons" class="col-md-4 col-form-label text-md-right">{{ __('Gallons Requested') }}</label></th>
                                                <th><label for="Gallons" class="col-md-4 col-form-label text-md-right">{{ __('Gallons Requested') }}</label></th>
                                                <th><label for="Gallons" class="col-md-4 col-form-label text-md-right">{{ __('Gallons Requested') }}</label></th>
                                                <th><label for="Gallons" class="col-md-4 col-form-label text-md-right">{{ __('Gallons Requested') }}</label></th>
                                                <th><label for="Gallons" class="col-md-4 col-form-label text-md-right">{{ __('Gallons Requested') }}</label></th>
                                                <th><label for="Gallons" class="col-md-4 col-form-label text-md-right">{{ __('Gallons Requested') }}</label></th>
                                            </tr>
                                    
                                        </table>
                                    </div>
                                </div>
                                
                            </div>

            </div>
        </div>
    </div>
</div>
@endsection
