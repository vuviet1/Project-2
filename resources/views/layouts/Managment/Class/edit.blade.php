<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Sửa lớp</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('class.post-edit')}}">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="nameClass" class="form-label">Tên lớp</label>
                                    <input type="text" class="form-control" placeholder="Tên lớp" name="nameClass" value="{{old('nameClass') ?? $classDetals->name_class}}">
                                    @error('nameClass')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="id_edu" class="form-label">Chương trình học</label>
                                    <input type="hidden" name="id_edu" >
                                    <select class="col form-select mb-3 form-select form-control" name="id_edu">
                                        @if(!empty($education_programList))
                                            @foreach($education_programList as $key => $item)
                                                <option class="form-control" value="{{$item->id_edu}}" {{($item->id_edu == old('id_edu')) ? 'selected' : ''}}>
                                                    {{$item->training_route}}
                                                </option>
                                            @endforeach
                                        @endif
{{--                                        @if(!empty($education_programList))--}}
{{--                                            <select class="form-control" name="education_program">--}}
{{--                                                @foreach($education_programList as $key => $item)--}}
{{--                                                    <option value="{{$item->id_edu}}" {{($item->id_edu == $selected_id) ? 'selected' : ''}}>--}}
{{--                                                        {{$item->training_route}}--}}
{{--                                                    </option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        @endif--}}
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="id_majors" class="form-label">Chuyên ngành</label>
                                    <select class="col form-select mb-3 form-select form-control" name="id_majors">
                                        <option selected class="form-control">-- Chuyên ngành --</option>
                                        @if(!empty($majorsList))
                                            @foreach($majorsList as $key => $item)
                                                <option value="{{$item->id_majors}}" class="form-control">
                                                    {{$item->name_majors}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="id_course" class="form-label">Khóa học/Năm học</label>
                                    <select class="col form-select mb-3 form-select form-control" name="id_course">
                                        <option selected class="form-control">-- Khóa học/Năm học --</option>
                                        @if(!empty($courseList))
                                            @foreach($courseList as $key => $item)
                                                <option value="{{$item->id_course}}" class="form-control">
                                                    {{$item->number_course}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-6">
                                    <label for="original_fee" class="form-label">Tổng tiền phải đóng</label>
                                    <input type="text" class="form-control" placeholder="Số tiền ..." name="original_fee" value="{{old('original_fee') ?? $classDetals->original_fee}}">
                                    @error('original_fee')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            @csrf
                        </form>
                        <br>
                        {{--                        <button class="btn btn-secondary" type="reset">Reset</button>--}}
                        <a class="btn btn-warning" href="{{route('class.index')}}">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
