<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thêm học sinh, sinh viên</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="idClass" class="form-label">ID</label>
                                    <input type="text" class="form-control" placeholder="Mã SV" name="id" disabled>
                                </div>
                                <div class="col">
                                    <label for="nameStudent" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Tên học sinh" name="nameStudent">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="date" class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" placeholder="Ngày sinh" name="date" >
                                </div>
                                <div class="col">
                                    <label for="nameClass" class="form-label">Điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại" name="phoneStudent">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="statusStudent" class="form-label">Trạng thái</label>
{{--                                    <input type="text" class="form-control" placeholder="-- Trạng thái --" name="statusStudent">--}}
                                    <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                        <option selected class="form-control">-- Trạng thái --</option>
                                        <option value="1" class="form-control">One</option>
                                        <option value="2" class="form-control">Two</option>
                                        <option value="3" class="form-control">Three</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="nameClass" class="form-label">Lớp học</label>
                                    <input type="text" class="form-control" placeholder="Lớp học" name="nameClass">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="idClass" class="form-label">Học bổng(nếu có)</label>
                                    <input type="text" class="form-control"
                                           placeholder="Mã SV"
                                           name="id">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <br>
                        <a class="btn btn-primary" href="{{route('student')}}">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
