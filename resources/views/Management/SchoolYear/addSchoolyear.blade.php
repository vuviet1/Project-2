{{--                        ADD--}}

{{--                                <!-- Modal -->--}}
{{--<div class="col">--}}
{{--    <div class="btn-add" style="text-align: center; margin-top: 20px">--}}
{{--        <!-- Button trigger modal -->--}}
{{--        <button type="button" class="btn btn-primary" data-bs-toggle="modal"--}}
{{--                data-bs-target="#staticBackdropAdd">--}}
{{--            Thêm học phí--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
{{--                                End modal--}}


                                {{--Modal Adđ tuition--}}
                                <div class="modal fade" id="staticBackdropAdd" data-bs-backdrop="static"
                                     data-bs-keyboard="false"
                                     tabindex="-1" aria-labelledby="staticBackdropLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-6" id="staticBackdropLabel">Form thêm niên khóa</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{--                                    --}}
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col">
                                                                <label for="idClass" class="form-label">Mã niên khóa</label>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Mã niên khóa"
                                                                       name="id" disabled>
                                                            </div>
                                                            <div class="col">
                                                                <label for="nameStudent" class="form-label">Niên khóa</label>
                                                                <input type="date" class="form-control"
                                                                       placeholder="Niên khóa"
                                                                       name="number_course">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--                                    --}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Thêm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
