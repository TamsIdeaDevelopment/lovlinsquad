<template>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0 mb-1">
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <h3 class="">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-open-text-book text-primary"></i>
                                                </span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control mt-n3"  v-model="data.name"/>
                                            <div class="row" v-if="('name' in errors)">
                                                <div class="col">
                                                    <label class="text-danger">{{errors['name']}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </li>
                        </ul>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="javascript:;" @click="updateClassroom()" class="btn btn-primary font-weight-bolder font-size-sm">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="carousel-inner pt-9">
                                    <div class="carousel-item active">
                                        <div class="flex-grow-1">
                                            <span class="font-size-h4 text-primary text-hover-primary font-weight-bold pb-5 d-block text-uppercase">Information</span>
                                            <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">
                                                <label>Title</label>
                                            </h3>
                                            <div class="row" v-if="('info_title' in errors)">
                                                <div class="col">
                                                    <label class="text-danger">{{errors['info_title']}}</label>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control "  v-model="data.info_title"/>
                                            <p class="font-size-h4 font-weight-bold font-size-lg pt-2">
                                                <label>Description</label>
                                                    <div class="row" v-if="('info_description' in errors)">
                                                        <div class="col">
                                                            <label class="text-danger">{{errors['info_description']}}</label>
                                                        </div>
                                                    </div>
                                                <textarea class="form-control form-control-lg" v-model="data.info_description"  rows="10"></textarea>
                                            </p>
                                            <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">
                                                <label>Remark</label>
                                                <input type="text" class="form-control "  v-model="data.info_remark"/>
                                            </h3>
                                            <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">
                                                <label>Link</label>
                                                <input type="text" class="form-control "  v-model="data.info_link"/>
                                            </h3>
                                        </div>
                                        <div class="">
                                            <span class="font-size-h4 text-primary text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Video</span>
                                            <p class="font-size-h4 font-weight-bold font-size-lg pt-2">
                                                <label>Video Title</label>
                                                <input type="text" class="form-control "  v-model="data.video_title"/>
                                            </p>
                                            <p class="font-size-h4 font-weight-bold font-size-lg pt-2">
                                                <label>Video Link</label>
                                                <input type="text" class="form-control "  v-model="data.video_link"/>
                                            </p>
                                            <div class="d-inline d-flex justify-content-center">
                                                <iframe width="750" height="400" :src="data.video_link">
                                                </iframe>
                                            </div>
                                        </div>
                                        <div class="pt-7">
                                            <span class="font-size-h6 text-primary text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Files</span>
                                            <div class="align-items-center">
                                                <div class="row"  v-if="data.file1 && data.file1!=='null'">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                                    <span class="symbol-label font-weight-bolder font-size-lg">1</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group  ml-10" style="width: 180%;">
                                                                    <a v-if="data.file1" :href="'/storage/Classroom/'+ data.file1" target="_blank">{{data.file1}}</a>
                                                                    <div class="form-group form-control-solid form-control-lg" style="border: 1px solid lightgrey">
                                                                        <input type="file" class="form-control-file" @change="selectFile1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"  v-if="data.file2 && data.file2!=='null'">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                                    <span class="symbol-label font-weight-bolder font-size-lg">2</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group  ml-10" style="width: 180%;">
                                                                    <a v-if="data.file2" :href="'/storage/Classroom/'+ data.file2" target="_blank">{{data.file2}}</a>
                                                                    <div class="form-group form-control-solid form-control-lg" style="border: 1px solid lightgrey">
                                                                        <input type="file" class="form-control-file" @change="selectFile2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"  v-if="data.file3 && data.file3!=='null'">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                                    <span class="symbol-label font-weight-bolder font-size-lg">3</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group  ml-10" style="width: 180%;">
                                                                    <a v-if="data.file3" :href="'/storage/Classroom/'+ data.file3" target="_blank">{{data.file3}}</a>
                                                                    <div class="form-group form-control-solid form-control-lg" style="border: 1px solid lightgrey">
                                                                        <input type="file" class="form-control-file" @change="selectFile3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" v-if="data.file4 && data.file4!=='null'">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                                    <span class="symbol-label font-weight-bolder font-size-lg">4</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group  ml-10" style="width: 180%;">
                                                                    <a v-if="data.file4" :href="'/storage/Classroom/'+ data.file4" target="_blank">{{data.file4}}</a>
                                                                    <div class="form-group form-control-solid form-control-lg" style="border: 1px solid lightgrey">
                                                                        <input type="file" class="form-control-file" @change="selectFile4">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" v-if="data.file5 && data.file5!=='null'">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                                    <span class="symbol-label font-weight-bolder font-size-lg">5</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group  ml-10" style="width: 180%;">
                                                                    <a v-if="data.file5" :href="'/storage/Classroom/'+ data.file5" target="_blank">{{data.file5}}</a>
                                                                    <div class="form-group form-control-solid form-control-lg" style="border: 1px solid lightgrey">
                                                                        <input type="file" class="form-control-file" @change="selectFile5">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props:['data'],
        data(){
            return{
                errors: [],
                Classroom: this.data,
                src:'https://www.youtube.com/embed/tRMY12LSUYQ',
                file1:'',
                file2:'',
                file3:'',
                file4:'',
                file5:'',
            }
        },
        mounted() {
            VueEvent.$on('updateTable', () => {
                this.updateTable();
            });
        },
        watch: {
            'data': function() {
                this.Classroom = this.data;
            }
        },
        created() {

        },
        methods:
            {
                selectFile1(event) {
                    this.file1 = event.target.files[0];
                    console.log(this.file1);
                },
                selectFile2(event) {
                    this.file2 = event.target.files[0];
                    console.log(this.file2);
                },
                selectFile3(event) {
                    this.file3 = event.target.files[0];
                    console.log(this.file3);
                },
                selectFile4(event) {
                    this.file4 = event.target.files[0];
                    console.log(this.file4);
                },
                selectFile5(event) {
                    this.file5 = event.target.files[0];
                    console.log(this.file5);
                },

                updateClassroom()
                {
                    if(!this.file1)
                    {
                        this.file1 = this.Classroom.file1;
                    }
                    if(!this.file2)
                    {
                        this.file2 = this.Classroom.file2;
                    }
                    if(!this.file3)
                    {
                        this.file3 = this.Classroom.file3;
                    }
                    if(!this.file4)
                    {
                        this.file4 = this.Classroom.file4;
                    }
                    if(!this.file5)
                    {
                        this.file5 = this.Classroom.file5;
                    }

                    this.errors = [];
                    if((this.Classroom.name) && (this.Classroom.info_title) && (this.Classroom.info_description))
                    {
                        let currentObj = this;
                        const config = {
                            headers: { 'content-type': 'multipart/form-data' }
                        }

                        let formData = new FormData();
                        formData.append("name", this.Classroom.name);
                        formData.append("info_title", this.Classroom.info_title);
                        formData.append("info_description", this.Classroom.info_description);
                        formData.append("info_remark", this.Classroom.info_remark);
                        formData.append("info_link", this.Classroom.info_link);
                        formData.append("video_title", this.Classroom.video_title);
                        formData.append("video_link", this.Classroom.video_link);
                        formData.append("file1", this.file1);
                        formData.append("file2", this.file2);
                        formData.append("file3", this.file3);
                        formData.append("file4", this.file4);
                        formData.append("file5", this.file5);

                        let vm= this;

                        axios.post('/api/v1/Classroom/HQ/Updates/'+ this.Classroom.id +'/update-classroom', formData, config)
                            .then(function (data) {
                                VueEvent.$emit('FetchClassroom');
                                toastr.options = {
                                    "closeButton": true,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                };

                                toastr.success("Succesfully update Classroom details", "Update Success");
                            })
                            .catch(function (error) {
                                currentObj.output = error;
                            });
                    }

                    if(!this.Classroom.name)
                    {
                        this.errors['name'] = "Please enter the name"
                    }

                    if(!this.Classroom.info_title)
                    {
                        this.errors['info_title'] = "Please enter the information title"
                    }
                    if(!this.Classroom.info_description)
                    {
                        this.errors['info_description'] = "Please enter the information description"
                    }
                },
            }
    }


</script>