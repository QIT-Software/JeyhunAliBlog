@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Instagram Posts
        </div>

        <div class="card-body">
            <form method="POST" action={{route('instagram.add')}}
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-10">
                        @include('partials.forms.input', [
                                'value' => "",
                                'name' => 'url',
                                'type' => 'text',
                                'required' => true,
                                'label' => 'Url',
                                'helper' => '',
                                'errors' => $errors
                            ]
                        )
                    </div>
                </div>
                <div class="form-group">
                    <hr/>
                    @include('partials.buttons.save')
                    @include('partials.buttons.back', ['url'=>route('instagram')])
                </div>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script type="text/javascript">
        var tnum = 0;

        function addTitle(title, value) {
            $('#titles').append("<div class='customTitle'>"
                + "<input type='text' class='form-control col-lg-2 bold' name='titles[" + tnum + "]' id='ctitle" + tnum + "'>"
                + "<input type='text' class='form-control col-lg-10' name='values[" + tnum + "]' id='cval" + tnum + "'>"
                + "</div>"
            );
            $('#ctitle' + tnum).val(title);
            $('#cval' + tnum).val(value);
            tnum++;
        }
    </script>
@endsection
