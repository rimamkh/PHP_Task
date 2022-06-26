@extends('layouts.app')
@section('content')
    <style>

    </style>
    <div class="container-fluid">

        <div class="row justify-content-center">


            @forelse ($products as $i)
                <div class="col-md-3 ml-5">
                    <div class="card mx-auto mb-5  " style="width: 18rem;">
                        <div class="card-header">
                            <img class="card-img-top center" style="width:246; height:246;" src="{{ $i->Image }}"
                                alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center ml-4 ">{{ $i->ProductName }}</h5>

                            <p class="card-text  ml-4">{{ $i->EAN }}</p>
                            <p class="card-text  ml-4">{{ $i->Type }}</p>
                            <p class="card-text  ml-4">{{ $i->Weight }}</p>
                            <p class="card-text  ml-4">{{ $i->Color }}</p>
                            <p class="card-text  ml-4">{{ $i->Active }}</p>

                            <div class="text-center">
                                <a style="text-decoration: none;" class="btn btn-danger" href="delete/{{ $i->id }}"
                                    data-toggle="modal" data-target="#exampleModal">
                                    Delete</a>

                                <a style="text-decoration:none;"class="btn btn-success"   href="update/{{ $i->id }}" data-toggle="modal"
                                    data-target="#exampleModal1">
                                  

                                    Edit
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ '/del/' . $i->id }}" method="POST">

                                    @method('delete')
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="modal-body">
                                        Do you want to delete this item?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ '/upd/' . $i->id }}" method="POST">

                                    @method('PUT')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="modal-body">
                                        <div class="form-group">           
                                            <input type="text" class="form-control" name="Image" value="{{ $i->Image }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                              <label for="ProductName">product name</label>
                                              <input type="text" class="form-control" name="ProductName" value="{{ $i->ProductName }}" >
                                            </div>
                                            <br>
                                            <div class="form-group">
                                              <label for="EAN">EAN</label>
                                              <input type="text" class="form-control" name="EAN" value="{{ $i->EAN }}" >
                                            </div>
                                            <br>
                                            <div class="form-group">
                                              <label for="Type">type</label>
                                              <input type="value" class="form-control" name="Type" value="{{ $i->Type }}" >
                                            </div>
                                             <br>
                                             <div class="form-group">
                                              <label for="Weight">weight</label>
                                              <input type="value" class="form-control" name="Weight" value="{{ $i->Weight }}" >
                                            </div>
                                             <br>
                                             <div class="form-group">
                                              <label for="Color">color</label>
                                              <input type="value" class="form-control" name="Color" value="{{ $i->Color }}" >
                                            </div>
                                             <br>
                                             <div class="form-group">
                                              <label for="Active">active</label>
                                              <input type="value" class="form-control" name="Active" value="{{ $i->Active }}" >
                                            </div>
                                             <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                no item
            @endforelse


        </div>

    </div>

    </div>

    {{ $products->links() }}
@endsection
<style>
    select {
        width: 38% !important;

    }
</style>
