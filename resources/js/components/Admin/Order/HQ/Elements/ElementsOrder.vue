<template>
    <table class="table table-separate table-head-custom table-checkable responsive display nowrap" id="kt_datatable">
        <thead>
        <tr>
            <th data-priority="1">No</th>
            <th >Buyer</th>
            <th>Seller</th>
            <th data-priority="2">Date</th>
            <th>Paid Status</th>
            <th>Status</th>
            <th>Total</th>
            <th>View</th>
            <!--<th>Actions</th>-->
        </tr>
        </thead>
        <tbody>
        <tr v-for="(Order, index) in data">
            <td>{{index+1}}</td>
            <td>
                <div class="row">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-12">
                                <div class="symbol" v-if="Order.buyer_id.avatar">
                                    <div class="symbol-label  w-50px h-50px" :style="'background-image:url('+ image_source + Order.buyer_id.avatar +')'"></div>
                                </div>
                                <div class="symbol" v-if="!Order.buyer_id.avatar">
                                    <div class="symbol-label  w-50px h-50px"> <i class="flaticon2-user"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-auto">
                                {{Order.buyer_id.name}}
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <span v-if="Order.HQ =='1'">HQ</span>
             </td>
            <td>{{Order.created_at}}</td>
            <td>
                <span v-if="Order.paid =='0'" class="label label-warning label-pill label-inline mr-2">Pending</span>
                <span v-if="Order.paid =='1'" class="label label-success label-pill label-inline mr-2">Success</span>
                <span v-if="Order.paid =='2'" class="label label-danger label-pill label-inline mr-2">Decline</span>
            </td>
            <td>
                <span v-if="Order.status =='2'" class="label label-warning label-pill label-inline mr-2">Pending</span>
                <span v-if="Order.status =='1'" class="label label-success label-pill label-inline mr-2">Success</span>
                <span v-if="Order.status =='3'" class="label label-danger label-pill label-inline mr-2">Decline</span>
            </td>
            <td>
                RM {{Order.total}}
            </td>
            <td>
                <a :href="Order.id +'/order-details'" class="btn btn-sm btn-primary">View</a>
            </td>
            <!--<td>-->
                <!--<button class="btn btn-sm btn-danger">Delete</button>-->
                <!--&lt;!&ndash;<div class="row ">&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-sm-auto mb-1">&ndash;&gt;-->
                        <!--&lt;!&ndash;<button class="btn btn-sm btn-success">Stock</button>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-sm-auto">&ndash;&gt;-->
                        <!--&lt;!&ndash;<button class="btn btn-sm btn-danger">Delete</button>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--</td>-->
        </tr>
        </tbody>
    </table>
</template>
<script>
    export default {
        props: ['data'],
        data() {
            return {
                image_source: 'storage/ProfilePicture/',
                Order:[],
                dataTable:null,
                editing: false,
            }
        },
        mounted() {
            VueEvent.$on('updateTable', () => {
                this.updateTable();
            });
        },
        watch: {
            data() {}
        },
        created(){},
        methods: {
//            openEditRecord(data){
//                $(".updateState").modal('show');
//                this.States = data;
//            },
//            openDeleteRecord(data){
//                $(".deleteState").modal('show');
//                this.States = data;
//            },
        }

    }

</script>
