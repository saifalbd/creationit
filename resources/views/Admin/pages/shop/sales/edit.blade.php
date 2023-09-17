<x-admin-layout>
   
    @slot('style')

    <link href="{{asset('assets/css/order-create.css')}}" rel="stylesheet" />
        <script>
            window.productDropdowns = @json($products);
            window.teacherDropdowns = @json($teachers);
            window.studentDropdowns = @json($students);
            window.orderStoreUrl = "{{route('order.update',['order'=>$order_id])}}";
            window.order = @json($order);
            window.orderIndex = "{{route('order.index')}}";

        </script>

<style>
    .card{
        background-color: #ffffff;
    }
    .form-control{
        border-radius: 15px;
    }
    input[type=radio]{
        transform: scale(1.5)
    }
    .order-create .type-box .type-box-item label{
        padding-top: 1.5rem;
    }
    .collapse.show{
        visibility: visible;
    }
</style>
    @endslot

    <main>
        <div class="container-fluid">

            <div class="card mt-4">

                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 my-auto">
                            Sales <i class="fas fa-angle-right"></i> Sales Create
                        </div>
                        <div class="col-md-3 text-right">

                            <a href="{{ route('order.index') }}" class="btn btn-outline-primary"> <i
                                    class="fas fa-folder-open"></i>Sales List</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="mt-3 card-body">
                        <div class="order-create" id="orderCreate"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   


</x-admin-layout>
