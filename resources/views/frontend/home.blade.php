@extends('layouts/master')

@section('content')

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="well hero">
            <h3>{{ __('home.title') }}</h3>
            <p>{{ __('home.text_block') }}</p>
            <p>
                <a class="btn btn-lg btn-primary" href="/donations/add" role="button">{{ __('home.collect_donations') }}</a>
                <a class="btn btn-lg btn-primary" href="/needs/add" role="button">{{ __('home.collect_needs') }}</a>
            </p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>{{ __('home.latest_needs') }}</h4>
                <table class="table table-responsive" id="needs-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('home.table.name') }}</th>
                        <th>{{ __('home.table.needs') }}</th>
                        <th>{{ __('home.table.address') }}</th>
                        <th>{{ __('home.table.city') }}</th>
                        <th>{{ __('home.table.tel') }}</th>
                        <th>{{ __('home.table.ppl') }}</th>
                        <th>{{ __('home.table.entered_by') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($needs) > 0)
                        @foreach($needs as $need)
                            <tr>
                                <th scope="row">{{ $need->id }}</th>
                                <td>{{ $need->name }}</td>
                                <td>{{ str_limit($need->needs, 150) }}</td>
                                <td>{{ str_limit($need->address, 200) }}</td>
                                <td>{{ $need->city }}</td>
                                <td>{{ $need->telephone }}</td>
                                @if($need->heads && $need->heads > 0)
                                <td>{{ $need->heads }}</td>
                                @else
                                <td>N/A</td>
                                @endif
                                <td>{{ $need->created_at }}</td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary read-needs"
                                        data-id="{{ $need->id }}"
                                    >
                                        <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                                    </button>
                                    <!-- <button type="button" class="btn btn-primary read-needs" data-id="{{ $need->id }}">Read full</button> -->
                                </td>
                                <td>
                                    <a target="_blank" href="http://reliefsupports.org/entry/need/{{$need->id}}">
                                        <button type="button" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

                <p>
                    <a class="btn btn-lg btn-primary" href="/needs/" role="button">{{ __('home.all_needs') }}</a>
                </p>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <h4>{{ __('home.latest_needs') }}</h4>
                <table class="table table-responsive" id="donations-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('home.table.name') }}</th>
                        <th>{{ __('home.table.donation') }}</th>
                        <th>{{ __('home.table.address') }}</th>
                        <th>{{ __('home.table.city') }}</th>
                        <th>{{ __('home.table.tel') }}</th>
                        <th>{{ __('home.table.entered_by') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($donations as $donation)
                        <tr>
                            <th scope="row">{{ $donation->id }}</th>
                            <td>{{ $donation->name }}</td>
                            <td>{{ str_limit($donation->donation, 150) }}</td>
                            <td>{{ str_limit($donation->address, 150) }}</td>
                            <td>{{ $donation->city }}</td>
                            <td>{{ $donation->telephone }}</td>
                            <td>{{ $donation->created_at }}</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-primary read-donation"
                                    data-id="{{ $donation->id }}"
                                >
                                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                                </button>
                            </td>
                            <td>
                                <a target="_blank" href="http://reliefsupports.org/entry/donation/{{$donation->id}}">
                                    <button type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <p>
                    <a class="btn btn-lg btn-primary" href="/donations/" role="button">{{ __('home.all_donations') }}</a>
                </p>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </div>

    <div class="modal fade"  id="needsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <dl class="dl-horizontal">
                        <dt>{{ __('home.table.name') }}</dt>
                        <dd id="name"></dd>
                        <dt>{{ __('home.table.needs') }}</dt>
                        <dd id="needs"></dd>
                        <dt>{{ __('home.table.address') }}</dt>
                        <dd id="address"></dd>
                        <dt>{{ __('home.table.city') }}</dt>
                        <dd id="city"></dd>
                        <dt>{{ __('home.table.tels') }}</dt>
                        <dd id="telephone"></dd>
                        <dt>{{ __('home.table.ppl') }}</dt>
                        <dd id="heads"></dd>
                        <dt>{{ __('home.table.entered_by') }}</dt>
                        <dd id="added"></dd>
                    </dl>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade"  id="donationModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <dl class="dl-horizontal">
                        <dt>{{ __('home.table.name') }}</dt>
                        <dd id="name"></dd>
                        <dt>{{ __('home.table.donation') }}</dt>
                        <dd id="donation"></dd>
                        <dt>{{ __('home.table.address') }}</dt>
                        <dd id="address"></dd>
                        <dt>{{ __('home.table.city') }}</dt>
                        <dd id="city"></dd>
                        <dt>{{ __('home.table.tels') }}</dt>
                        <dd id="telephone"></dd>
                        <dt>{{ __('home.table.extra_info') }}</dt>
                        <dd id="information"></dd>
                        <dt>{{ __('home.table.entered_by') }}</dt>
                        <dd id="added"></dd>
                    </dl>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
