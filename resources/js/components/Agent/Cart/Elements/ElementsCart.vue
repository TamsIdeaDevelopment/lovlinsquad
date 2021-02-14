<template>
    <div class="" data-wizard-type="step-content" data-wizard-state="current">
        <div class="card card-custom gutter-b">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder font-size-h3 text-primary">Shopping Cart</span>
                </h3>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a href="/list-product" class="btn btn-primary font-weight-bolder font-size-sm">Continue Shopping</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="row  d-inline"  v-if="$parent.TotalMOQ > $parent.Count">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <h6 class="font-weight-bolder  mt-n5">MOQ : <span class="text-danger">{{$parent.TotalMOQ}}</span></h6>

                            </div>
                        </div>
                        <div class="row d-inline"  v-if="$parent.TotalMOQ > $parent.Count">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <h6 class="font-weight-bolder  mt-n5">Total : <span class="text-danger">{{$parent.TotalMOQ - $parent.Count}} More ..</span></h6>
                            </div>
                        </div>
                        <div class="row d-inline"  v-if="$parent.Count >= $parent.TotalMOQ">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <h6 class="font-weight-bolder  mt-n5"><span class="text-success">You can place order now</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row text-muted  font-weight-bolder mb-5">
                        <div class="col-lg-4 text-left align-middle p-0 d-none d-sm-block">
                            <span class="ml-21">PRODUCT</span>
                        </div>
                        <div class="col-lg-2  text-right align-middle p-0 d-none d-sm-block">
                            STOCK
                        </div>
                        <div class="col-lg-4  text-right align-middle p-0 d-none d-sm-block">
                            QTY
                        </div>
                        <div class="col-lg-1 text-right p-0 d-none d-sm-block">
                            PRICE
                        </div>
                        <div class="col-lg-1  text-right p-0 d-none d-sm-block">

                        </div>
                    </div>
                    <div class="row border-bottom">

                    </div>
                    <div class="row border-bottom" v-for="Cart in $parent.Carts">
                        <div class="col-lg-4 d-flex align-items-center font-weight-bolder p-2">
                            <a @click="removeItems(Cart.rowId)" class="btn btn-icon btn-xs btn-outline-danger justify-content-center text-hover-white">
                                <i class="flaticon2-delete text-danger "></i>
                            </a>
                            <div class="ml-10 symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                <div class="symbol-label" :style="'background-image:url( storage/Product/' + Cart.options.size +')'"></div>
                            </div>
                            <a href="#" class="text-dark text-hover-primary">{{Cart.name}}</a>

                            <!--end::Symbol-->
                        </div>
                        <div class="col-lg-2   mt-3 text-center text-dark align-middle font-weight-bolder font-size-h5 p-2 d-flex justify-content-end">
                            <span class="d-block d-sm-none">Stock : </span>
                            <span class="text-danger">&nbsp; {{Cart.options.stock}}</span>
                        </div>
                        <div class="col-lg-4  text-right p-2">
                            <div class="row mt-3">
                                <div class="col-4 d-flex justify-content-end">
                                    <!--<a v-if="Cart.qty" @click="decreaseQuantity(Cart.rowId,Cart.qty,Cart.id,Cart.options.stock,Cart.name)" class="btn btn-xs btn-light-success btn-icon mr-2">-->
                                        <!--<i class="ki ki-minus icon-xs"></i>-->
                                    <!--</a>-->
                                </div>

                                <div class="col-4 d-flex justify-content-start">
                                    <!--<a @click="addQuantity(Cart.rowId,Cart.qty,Cart.id,Cart.options.stock,Cart.name)" class="btn btn-xs btn-light-success btn-icon">-->
                                        <!--<i class="ki ki-plus icon-xs"></i>-->
                                    <!--</a>-->
                                </div>
                                <div class="col-4">
                                    <span class="d-inline d-sm-none font-weight-bolder font-size-h5">Quantity : </span>
                                    <input type="number" class="form-control" style="width: 100%" v-model="Cart.qty" @change="changeQuantity(Cart.rowId,Cart.qty,Cart.id,Cart.options.stock,Cart.name)">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 mt-3 text-right text-dark align-middle font-weight-bolder font-size-h5 p-2 justify-items-center">
                            <span class="d-block d-sm-none">Price(unit) : </span>
                            <span v-if="$parent.data.country == 'Malaysia'">&nbsp; RM</span>
                            <span v-if="$parent.data.country == 'Singapura' || $parent.data.country == 'Brunei'">$</span>
                            {{Cart.price}}
                        </div>
                        <div class="col-lg-1 mt-3 text-right align-middle font-weight-bolder font-size-h5 p-2">
                            <span class="d-block d-sm-none">Total Price : </span>
                            <span class=" text-primary" v-if="$parent.data.country == 'Malaysia'">RM</span>
                            <span class=" text-primary" v-if="$parent.data.country == 'Singapura' || $parent.data.country == 'Brunei'">$</span>
                            <span class=" text-primary">{{Cart.subtotal}}</span>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-lg-4 text-right font-weight-bolder"></div>
                        <div class="col-lg-4 text-right font-weight-bolder"></div>
                        <div class="col-lg-2 text-right font-weight-bolder">
                            <span class="font-weight-bolder font-size-h6 text-right">Total Item</span>
                        </div>
                        <div class="col-lg-2 text-right font-weight-bolder">
                            <span class="font-weight-bolder font-size-h6 text-right">{{$parent.Count}}</span>
                        </div>
                    </div>
                    <div class="row border-bottom">

                    </div>
                    <div class="row  mt-3 mb-3">
                        <div class="col-lg-4 text-right font-weight-bolder "></div>
                        <div class="col-lg-4 text-right font-weight-bolder"></div>
                        <div class="col-lg-2 text-right font-weight-bolder">
                            <span class="font-weight-bolder font-size-h4 text-right">Subtotal</span>
                        </div>
                        <div class="col-lg-2 text-right font-weight-bolder">
                            <div class="font-weight-bolder text-success font-size-h4 text-right">
                                <span v-if="$parent.data.country == 'Malaysia'">RM</span>
                                <span v-if="$parent.data.country == 'Singapura' || $parent.data.country == 'Brunei'">$</span>
                                {{$parent.Totals}}
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom">

                    </div>
                    <div class="row  mt-3 mb-3">
                        <div class="col-lg-1 text-right font-weight-bolder "></div>
                        <div class="col-lg-1 text-right font-weight-bolder"></div>
                        <div class="col-lg-1 text-right font-weight-bolder"></div>
                        <div class="col-lg-9 text-right font-weight-bolder">
                            <span class="text-muted">Excludes Delivery. GST Included</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { EventBus } from "../../../../app";
    export default {
        props: ['data'],
        data() {
            return {
                isCoupon: false,
                tempArray:[],
            }
        },
        mounted() {
            EventBus.$on('updateElementsCart', () => {
                this.fetchCart();
            });
        },
        watch: {
            data() {}
        },
        created(){
            this.fetchCart();
        },
        methods: {
            coupon(){
                this.isCoupon= !this.isCoupon;
                if(this.isCoupon == true)
                {
                    this.$parent.Totals= this.$parent.Totals - this.$parent.AgentDetails.point;
                    this.$parent.point = this.$parent.point + this.$parent.AgentDetails.point;
                    console.log('Point :' + this.$parent.point);
                }
                if(this.isCoupon != true)
                {
                    this.$parent.Totals= this.$parent.Totals + this.$parent.AgentDetails.point;
                    this.$parent.point = this.$parent.point - this.$parent.AgentDetails.point;
                    console.log('Point :' + this.$parent.point);
                }
            },
            fetchCart(){
                axios.get('/api/v1/cart/list-cart')
                    .then(function (response) {
                        this.$parent.Carts = response.data;
                        this.fetchCount();
                        this.fetchTotals();
                        $('#kt_datatable1').DataTable().destroy();
                        this.$nextTick(() =>
                        {
                            $('#kt_datatable1').DataTable(
                                {
                                    responsive: true,
                                    pagingType: 'full_numbers',
                                    columnDefs: [
                                        { "width": "50px", "targets": 0 },
                                        { "width": "450px", "targets": 1 },
                                        { "width": "50px", "targets": 2 },
                                        { "width": "50px", "targets": 3 },
                                        { "width": "50px", "targets": 4 },
                                        { "width": "50px", "targets": 5 },
                                        {
                                            //targets: 3,
                                            width: '150px',
                                            title: 'Actions',
                                            orderable: false,
                                            render: function(data, type, full, meta) {

                                            },
                                        },
                                    ],
                                }
                            );
                        });
                    }.bind(this));
            },
            fetchCount(){
                axios.get('/api/v1/cart/count-cart')
                    .then(function (response) {
                        this.$parent.Count = response.data;
                    }.bind(this));
            },
            fetchTotals(){
                axios.get('/api/v1/cart/total-cart')
                    .then(function (response) {
                        this.$parent.Totals = response.data;
                    }.bind(this));
            },
            decreaseQuantity(rowId,quantity,productId,stock,product_name)
            {
                if(quantity > stock)
                {
                    this.$parent.CartStatus = false;
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
                    toastr.error("Please change the quantity", product_name +' \nQuantity Exceeds Stock');
                    this.fetchCart();

                }
                else
                {

                    var quantity = parseInt(quantity);
                    quantity = quantity -1;
                    var url = '/api/v1/cart/'+ this.$parent.data.id +'/'+ rowId + '/' +  quantity +'/decrease-quantity', method = 'post';

                    fetch(url, {
                        method: method,
                        body: JSON.stringify(),
                        headers: {
                            'content-type': 'application/json'
                        }
                    }).then(response => response.json())
                        .then(response => {
                            this.$parent.CartStatus = true;

                            this.fetchCart();
                            EventBus.$emit('updateDashboardCart');
                            EventBus.$emit('updateTotalCart');
                        })

                }
            },
            changeQuantity(rowId,quantity,productId,stock,product_name)
            {
                if(quantity > stock)
                {
                    this.$parent.CartStatus = false;
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
                    toastr.error("Please change the quantity", product_name +' \nQuantity Exceeds Stock');
                    this.fetchCart();

                }
                else
                {

                    var quantity = parseInt(quantity);
                    var url = '/api/v1/cart/'+ this.$parent.data.id +'/'+ rowId + '/' +  quantity +'/add-quantity', method = 'post';

                    fetch(url, {
                        method: method,
                        body: JSON.stringify(),
                        headers: {
                            'content-type': 'application/json'
                        }
                    }).then(response => response.json())
                        .then(response => {
                            this.$parent.CartStatus = true;

                            this.fetchCart();
                            EventBus.$emit('updateDashboardCart');
                            EventBus.$emit('updateTotalCart');
                        })

                }


            },
            addQuantity(rowId,quantity,productId,stock,product_name)
            {
                console.log(quantity)
                console.log(stock)
                if(quantity > stock)
                {
                    this.$parent.CartStatus = false;
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
                    toastr.error("Please change the quantity", product_name +' \nQuantity Exceeds Stock');
                    this.fetchCart();

                }
                else
                {

                    var quantity = parseInt(quantity);
                    quantity = quantity +1;
                    var url = '/api/v1/cart/'+ this.$parent.data.id +'/'+ rowId + '/' +  quantity +'/add-quantity', method = 'post';

                    fetch(url, {
                        method: method,
                        body: JSON.stringify(),
                        headers: {
                            'content-type': 'application/json'
                        }
                    }).then(response => response.json())
                        .then(response => {
                            this.$parent.CartStatus = true;

                            this.fetchCart();
                            EventBus.$emit('updateDashboardCart');
                            EventBus.$emit('updateTotalCart');
                        })
                }

            },

            removeItems(rowId)
            {
                this.$parent.CartStatus = false;

                var url = '/api/v1/cart/'+ this.$parent.data.id +'/'+ rowId +'/remove-item', method = 'post';

                fetch(url, {
                    method: method,
                    body: JSON.stringify(),
                    headers: {
                        'content-type': 'application/json'
                    }
                }).then(response => response.json())
                    .then(response => {
                        this.fetchCart();
                        EventBus.$emit('updateDashboardCart');
                        EventBus.$emit('updateTotalCart');
                    })
            }
        }

    }

</script>