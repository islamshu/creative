@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">خدماتنا </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">

                                <div class="card-body card-dashboard">
                                    @include('dashboard.parts._error')
                                    @include('dashboard.parts._success')

                                    <br>

                                    <br>
                                    <table class="table table-striped table-bordered zero-configuration" id="storestable">


                                        <br>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>الصورة</th>
                                                <th>العنوان </th>
                                                <th>الاجراءات </th>

                                            </tr>
                                        </thead>
                                        <tbody class="sort_menu">

                                            @foreach ($services as $item)
                                                <tr data-id="{{ $item->id }}">
                    
                    
                                                    <td> <i class="fa fa-bars handle" aria-hidden="true"></i></td>
                    
                    
                                                    <td><img src="{{ asset('uploads/'.$item->image) }}" width="70" height="70" alt=""></td>
                                                    <td>{{ $item->title }}</td>
                    
                                                    <td class="pr-0 text-left">
                                                        <a href="{{ route('services.edit',$item->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    
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
            </section>

        </div>

    </div>
@endsection

@section('script')
    <script>
          function updateToDatabase(idString) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                $.ajax({
                    url: '{{ route('reorder_service') }}',
                    method: 'POST',
                    data: {
                        ids: idString
                    },
                    success: function() {
                        alert('تم اعادة ترتيب الخدمات بنجاح')
                        //do whatever after success
                    }
                })
            }

            var target = $('.sort_menu');
            target.sortable({
                handle: '.handle',
                placeholder: 'highlight',
                axis: "y",
                update: function(e, ui) {
                    var sortData = target.sortable('toArray', {
                        attribute: 'data-id'
                    })
                    updateToDatabase(sortData.join(','))
                }
            });
    </script>
@endsection