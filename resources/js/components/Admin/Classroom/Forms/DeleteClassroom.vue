<template>
    <div class="modal fade deleteClassroom" id="deleteClassroom" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form @submit.prevent="deleteClassroom">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Are you sure to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" v-model="Classroom.name" disabled/>
                        </div>
                        <div class="form-group" >
                            <label>Title</label>
                            <input type="text" class="form-control" v-model="Classroom.info_title" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" v-model="Classroom.info_description" disabled/>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label>Remark</label>
                                    <input type="text" class="form-control" v-model="Classroom.info_remark" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['data'],
        data(){
            return{
                Classroom:[],
            }
        },
        watch: {
            'data': function() {
                this.Classroom = this.data;
            }
        },
        created() {},
        mounted () {
        },

        methods:
            {
                deleteClassroom()
                {
                    var url = '/api/v1/Classroom/HQ/Deletes/'+ this.Classroom.id +'/delete-classroom', method = 'post';

                    fetch(url, {
                        method: method,
                        body: JSON.stringify(),
                        headers: {
                            'content-type': 'application/json'
                        }
                    }).then((response) => {
                        $('.deleteClassroom').click();
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

                        toastr.success("Successfully Delete Classroom", "Classroom Deleted");
                    })
                },
            }
    }


</script>