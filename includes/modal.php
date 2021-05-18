<!-- ADD DATA -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="dummy" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" value="email@gmail.com"  name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" class="form-control" id="phone" value="9874563214" name="phone" >
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-control" id="gender" name="gender">
                            <option value="">--SElect--</option>
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="submit" name="submit" data-bs-dismiss="modal" class="btn btn-primary" onclick="submit()">Save changes</button>
            </div>
        </div>
    </div>
</div>



<!-- SHOW DATA -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Show Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="showData">
                <p>Name: <span id="sname"></span></p>
                <p>Email: <span id="semail"></span></p>
                <p>Phone: <span id="sphone"></span></p>
                <p>Gender: <span id="sgender"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!--SHOW MODEL-->


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Add Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                    <input  name="" value="" type="hidden" id="hid"/>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="ename" value="" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="eemail" value=""  name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" class="form-control" id="ephone" value="" name="phone" >
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-control" id="egender" name="gender">
                            <option value="">--SElect--</option>
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="submit" name="submit" data-bs-dismiss="modal" class="btn btn-primary" onclick="Update()">Update</button>
            </div>
        </div>
    </div>
</div>
