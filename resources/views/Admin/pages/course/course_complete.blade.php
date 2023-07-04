<x-admin-layout>
    <main>
        <div class="container-fluid"><div class="card mt-4">

    <div class="card-header">
        <div class="row">
            <div class="col-md-9 my-auto">
            Admission  <i class="fas fa-angle-right"></i>Result Information <i class="fas fa-angle-right"></i> Naimul Haque Naim      </div>
            <div class="col-md-3 text-right">
            <a href="list_admission.php" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> Admission List</a>
            </div>
            </div>
            </div>
            <form name="frmUser" method="post" action="" enctype="multipart/form-data" >

            <div class="card mb-2">
            <div class="card-header">
            Result Information
            </div>
            <div class="card-body">
            <div class="row">
            <div class="form-group col-md-3">
                <label for="inputthird2">Grade</label>
                <input type="text" class="form-control" name="grade" value="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputCity">GPA</label>
                <input type="text" class="form-control"  name="gpa" value="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputCity">Course Completed Date</label>
                <input type="date" class="form-control" name="completed" value="0000-00-00">
            </div>
            
            </div>

            </div>
            </div>

            <div class="card mb-2">
            <div class="card-footer">

            <input type="submit" name="submit" value="Save" id="register" class="btn btn-primary ">
            <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
    </div>
</main>
</x-admin-layout>