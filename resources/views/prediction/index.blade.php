@extends('layouts.app')
@section('content')
<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">Spielplan / Tippabgabe</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- play-section start -->
<section class="play-section section-padding section-bg">

    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="online-play-tab-part">
                    <ul class="nav justify-content-around" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="month nav-link active" data-column_name="0" data-toggle="tab" href="#" role="tab"
                                aria-controls="all" aria-selected="true">
                                <i class="fas fa-list"></i>
                                <span>Alle Spiele</span>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a class="month nav-link" data-column_name="13" data-toggle="tab" href="#" role="tab"
                                    aria-controls="all" aria-selected="true">
                                    <i class="fas fa-calendar"></i>
                                    <span>Heutige Spiele</span>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="month nav-link" data-column_name="11" data-toggle="tab" href="#november" role="tab"
                                 aria-selected="false">
                                <i class="far fa-calendar-alt"></i>
                                <span>November</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="month nav-link" data-column_name="12" data-toggle="tab" href="#dezember" role="tab"
                                aria-controls="cricket" aria-selected="false">
                                <i class="far fa-calendar-alt"></i>
                                <span>Dezember</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="month nav-link" data-column_name="1" id="tennis-tab" data-toggle="tab" href="#januar" role="tab"
                                aria-controls="tennis" aria-selected="false">
                                <i class="far fa-calendar-alt"></i>
                                <span>Januar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="month nav-link" data-column_name="2"  data-toggle="tab" href="#februar" role="tab"
                                aria-controls="bascketball" aria-selected="false">
                                <i class="far fa-calendar-alt"></i>
                                <span>Februar</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">


                            {{-- <a class="month" data-column_name="0" href="javascript:void(0);">All</a>
                            <a class="month" data-column_name="1" href="javascript:void(0);">January</a>
                            <a class="month" data-column_name="2" href="javascript:void(0);">February</a>
                            <a class="month" data-column_name="3" href="javascript:void(0);">March</a>
                            <a class="month" data-column_name="4" href="javascript:void(0);">April</a>
                            <a class="month" data-column_name="5" href="javascript:void(0);">May</a>
                            <a class="month" data-column_name="6" href="javascript:void(0);">June</a>
                            <a class="month" data-column_name="7" href="javascript:void(0);">July</a>
                            <a class="month" data-column_name="8" href="javascript:void(0);">August</a>
                            <a class="month" data-column_name="9" href="javascript:void(0);">September</a>
                            <a class="month" data-column_name="10" href="javascript:void(0);">October</a>
                            <a class="month" data-column_name="11" href="javascript:void(0);">November</a>
                            <a class="month" data-column_name="12" href="javascript:void(0);">December</a> --}}



                            <div class="play-table-part">
                                <div class="play-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="team-name">Spiel</th>
                                                <th class="choice-team">Tipp</th>
                                                <th class="bet-num">Datum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <h3 style="color:#e52520; font-weight:700;margin-bottom:10px;">
                                                {{ session('error') ? session('error') : '' }}<h3>

                                                    {{--                                        @if(count($matchesArray) > 0)--}}

                                                    @include('ajax.by-month')
                                                    {{--                                        @else--}}
                                                    {{--                                            <h1>No records</h1>--}}
                                                    {{--                                        @endif--}}

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- online-play-tab-part end -->
        </div>
    </div>
    </div>
</section>
<!-- play-section end -->
@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        moment.locale('de');

        function clear_icon() {
            $('#id_icon').html('');
            $('#post_title_icon').html('');
        }

        function fetch_data(column_name) {
            $.ajax({
                url: "/prediction/spy5k2YgeWYBY46X?sortby=" + column_name,
                success: function (data) {
                    $('tbody').html('');
                    $('tbody').html(data);

                    let dates = document.querySelectorAll('.match-date')
                    moment.locale('de');

                    dates.forEach(el => {
                        let dateTime = new Date(el.innerText);
                        el.innerText = moment(dateTime).format('DD MMMM YYYY HH:mm');

                        return el;
                    })

                }
            })
        }

        $(document).on('click', '.month', function () {
            var column_name = $(this).data('column_name');
            fetch_data(column_name);
        });

        fetch_data(0);

    });
</script>




<script>
    (function() {

    })();
</script>
@endpush
