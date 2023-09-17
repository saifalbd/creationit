<x-admin-layout>


    <main>
        <div class="container-fluid">

            <div class="card mt-4">

                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 my-auto">
                            Category <i class="fas fa-angle-right"></i> Category Create
                        </div>
                        <div class="col-md-3 text-right">

                            <a href="{{ route('category.index') }}" class="btn btn-outline-primary"> <i
                                    class="fas fa-folder-open"></i>Category List</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="mt-3 card-body">
                        <form name="frmUser" method="post" action="{{ route('category.update',['category'=>$category->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                        

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Product Category" name="title" required value="{{$category->title}}" />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 text-right">
                    
                                <button type="submit" class="btn btn-success">save</button>
                            </div>

                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-b-bar o="Categoy" t="Category Create" :url="route('category.index')" :add="true">Category List</x-b-bar>

    <x-form-box method="post" action="{{ route('category.store') }}">
        <div class="form-group col-span-12 md:col-span-12">
            <label for="inputEmail4">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
                placeholder="Product Category" name="title" required />
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </x-form-box>
</x-admin-layout>
