<template>
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid mt-n10">
            <div class="row justify-content-center mt-3 mb-10 d-print-none">
                <div class="col-md-6">
                    <div v-if="Order.paid == 1" class="alert alert-custom alert-outline-2x alert-outline-success fade show" role="alert" style="height: 30px">
                        <div class="alert-icon"><i class="fas fa-check"></i></div>
                        <div class="alert-text">Payment Success</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div v-if="Order.paid == 0" class="alert alert-custom alert-outline-2x alert-outline-warning fade show" role="alert" style="height: 30px">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">Payment Pending</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div v-if="Order.paid == 2" class="alert alert-custom alert-outline-2x alert-outline-danger fade show" role="alert" style="height: 30px">
                        <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
                        <div class="alert-text">Payment Failed</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <!--<div v-if="Order.status == 1" class="alert alert-custom alert-outline-2x alert-outline-success fade show" role="alert" style="height: 30px">-->
                        <!--<div class="alert-icon"><i class="fas fa-check"></i></div>-->
                        <!--<div class="alert-text">Payment Success</div>-->
                        <!--<div class="alert-close">-->
                            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                                <!--<span aria-hidden="true"><i class="ki ki-close"></i></span>-->
                            <!--</button>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div v-if="Order.status == 2" class="alert alert-custom alert-outline-2x alert-outline-warning fade show" role="alert" style="height: 30px">-->
                        <!--<div class="alert-icon"><i class="flaticon-warning"></i></div>-->
                        <!--<div class="alert-text">Payment Pending</div>-->
                        <!--<div class="alert-close">-->
                            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                                <!--<span aria-hidden="true"><i class="ki ki-close"></i></span>-->
                            <!--</button>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div v-if="Order.status == 3" class="alert alert-custom alert-outline-2x alert-outline-danger fade show" role="alert" style="height: 30px">-->
                        <!--<div class="alert-icon"><i class="fas fa-times-circle"></i></div>-->
                        <!--<div class="alert-text">Payment Failed</div>-->
                        <!--<div class="alert-close">-->
                            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                                <!--<span aria-hidden="true"><i class="ki ki-close"></i></span>-->
                            <!--</button>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary font-weight-bold d-print-none" onclick="window.print();">Print Invoice</button>
                    </div>
                </div>
            </div>
            <div class="card card-custom gutter-b" id="html1">
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                        <div class="col-md-11">
                            <div class="d-flex justify-content-between pb-5 pb-md-20 flex-column flex-md-row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8">
                                            <h1 class="display-4 font-weight-boldest mb-10">Order: <span class="text-primary">{{String('00000' + Order.id).slice(-6)}} </span></h1>
                                            <h6 class="font-weight-bolder mt-8">Order Date: <span class="text-primary">{{Order.created_at}}</span></h6>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 justify-content-end">
                                            <div class="d-flex flex-column align-items-md-end px-0">
                                                <a href="#" class="mb-5">
                                                    <!--<img src="https://www.kembarameals.com/wp-content/uploads/2018/04/kembara-logo.png" style="height:80px"  class="mr-n10"/>-->
                                                    <img src="https://www.lovlin.com/wp-content/uploads/2020/09/logo_lovlin_web_3.png" style="height:80px"  class="mr-n10"/>
                                                </a>
                                                <span class="d-flex flex-column align-items-md-end opacity-70 mr-n7">
                                                    <span>65-G, Jalan 9/1A, Eco Majestic</span>
                                                    <span>43500 Semenyih, Selangor</span>
                                                </span>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12"  v-if="Order.HQ == 1">
                                            <h3 class="font-weight-bolder mt-8">BILL FROM :</h3>
                                            <h5 class="font-weight-bolder"> Lovlin HQ</h5>
                                            <span class="opacity-70">
                                                65-G, Jalan 9/1A, Eco Majestic
                                                <br />43500 Semenyih, Selangor
                                                <br/>Malaysia
                                            </span>
                                            <span class="opacity-70">
                                            <br />
                                                03-8727 8287
                                            </span>
                                        </div>
                                        <div class="col-lg-12"  v-if="Order.HQ == 0">
                                            <h3 class="font-weight-bolder mb-5">BILL FROM :</h3>
                                            <h5 class="font-weight-bolder"> {{Order.seller_id.name}}</h5>
                                            <span class="opacity-70">
                                                {{Order.seller_id.address_1}}
                                                <br />{{Order.seller_id.postcode}} {{Order.seller_id.city}} {{Order.seller_id.state}}
                                                <br/>{{Order.seller_id.country}}
                                            </span>
                                            <span class="opacity-70">
                                                <br />
                                                    {{Order.seller_id.phone_no}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom w-100"></div>
                            <div class="row">
                                <div class="col-8 col-md-8 col-sm-8 col-xxl-8 col-xs-8 mt-5">
                                    <h3 class="font-weight-bolder mb-5">BILL TO :</h3>
                                    <h5 class="font-weight-bolder"> {{Order.buyer_id.name}}</h5>
                                    <span class="opacity-70">
                                        {{Order.buyer_id.address_1}}
                                        <br />{{Order.buyer_id.postcode}} {{Order.buyer_id.city}} {{Order.buyer_id.state}}
                                        <br/>{{Order.buyer_id.country}}
                                    </span>
                                    <span class="opacity-70">
                                        <br />{{Order.buyer_id.phone_no}}
                                    </span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  col-xxl-4 col-xs-4  justify-content-end mt-5">
                                    <h3 class="font-weight-bolder mb-5">DELIVER TO :</h3>
                                    <h5 class="font-weight-bolder"> {{Order.deliver_to}}</h5>
                                    <span class="opacity-70">
                                        {{Order.shipping_address}}
                                        <br />{{Order.postcode}} {{Order.city}} {{Order.state}}
                                        <br/>{{Order.country}}
                                    </span>
                                    <span class="opacity-70">
                                        <br />{{Order.deliver_to_phone_no}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0 mt-n10">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Items</th>
                                        <th class="text-right font-weight-bold text-muted text-uppercase">Qty</th>
                                        <th class="text-right font-weight-bold text-muted text-uppercase">Unit Price</th>
                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="font-weight-boldest border-bottom-0" v-for=" OrderItem in OrderItems">
                                        <td class="border-0 pl-0 pt-7 d-flex align-items-center">
                                            <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light d-print-none">
                                                <div class="symbol-label" :style="'background-image:url('+ image_source + OrderItem.product_id.featured_image +')'"></div>
                                            </div>
                                            {{OrderItem.name}}</td>
                                        <td class="border-top-0 text-right pt-7 align-middle">{{OrderItem.quantity}}</td>
                                        <td class="border-top-0 text-right pt-7 align-middle"  v-if="BuyerDetails.country =='Malaysia'">RM {{OrderItem.price}}</td>
                                        <td class="border-top-0 text-right pt-7 align-middle"  v-if="BuyerDetails.country =='Singapura' || BuyerDetails.country =='Brunei'">$ {{OrderItem.price}}</td>
                                        <td class="border-top-0 text-primary pr-0 pt-7 text-right align-middle"  v-if="BuyerDetails.country =='Malaysia'">RM {{OrderItem.total}}</td>
                                        <td class="border-top-0 text-primary pr-0 pt-7 text-right align-middle"  v-if="BuyerDetails.country =='Singapura' || BuyerDetails.country =='Brunei'">$ {{OrderItem.total}}</td>
                                    </tr>
                                    <!--<tr>-->
                                        <!--<td colspan="2"></td>-->
                                        <!--<td class="font-weight-bolder font-size-h6 text-right">Coupon</td>-->
                                        <!--<td class="font-weight-bolder pr-0 text-right text-danger font-size-h6 text-right">RM {{Order.point}}</td>-->
                                    <!--</tr>-->
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="font-weight-bolder font-size-h4 text-right">Subtotal</td>
                                        <td class="font-weight-bolder pr-0 text-right text-success font-size-h4 text-right"  v-if="BuyerDetails.country =='Malaysia'">RM {{Order.total}}</td>
                                        <td class="font-weight-bolder pr-0 text-right text-success font-size-h4 text-right" v-if="BuyerDetails.country =='Singapura' || BuyerDetails.country =='Brunei'">$ {{Order.total}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0 mb-10  d-print-none" v-if="this.Order.payment_methods ==1">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-bold text-muted text-uppercase">METHOD</th>
                                        <th class="font-weight-bold text-muted text-uppercase">BILL CODE</th>
                                        <th class="font-weight-bold text-muted text-uppercase">ORDER STATUS</th>
                                        <th class="font-weight-bold text-muted text-uppercase">REFERENCES</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right">TOTAL PAID</th>
                                        <!--<th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.status =='2'">PAY</th>-->
                                        <!--<th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.status =='3'">PAY</th>-->
                                        <!--<th class="font-weight-bold text-muted text-uppercase text-right" v-if="(Order.status =='2') && (Order.buyer_id.id == user)">PAY</th>-->
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="(Order.paid =='0') && (Order.buyer_id.id == user)">PAY</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.status =='2'  && Order.seller_id.id == user">APPROVE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="font-weight-bolder">
                                        <td>TOYYIBPAY</td>
                                        <td><a  target="_blank" :href="'https://toyyibpay.com/'+ Order.billcode">{{Order.billcode}}</a></td>
                                        <td>
                                            <span v-if="Order.status =='2'" class="label label-warning label-pill label-inline mr-2">PROCESSING</span>
                                            <span v-if="Order.status =='1'" class="label label-success label-pill label-inline mr-2">SUCCESS</span>
                                            <span v-if="Order.status =='3'" class="label label-danger label-pill label-inline mr-2">REJECTED</span>
                                        </td>
                                        <td>{{Order.ref_no}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right">RM {{Order.total_paid}}</td>
                                        <!--<td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.status =='2' && (Order.buyer_id.id == user)"><a class="btn btn-success" :href="'https://dev.toyyibpay.com/'+ Order.billcode">Pay</a></td>-->
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.paid =='0'  && (Order.buyer_id.id == user)"><a class="btn btn-success" :href="'https://toyyibpay.com/'+ Order.billcode">Pay</a></td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.status =='2'  && Order.seller_id.id == user"><a class="btn btn-primary" @click="ApproveOrder">Approve</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0 mb-10  d-print-none" v-if="this.Order.payment_methods ==2">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-bold text-muted text-uppercase">METHOD</th>
                                        <th class="font-weight-bold text-muted text-uppercase">REFERENCES</th>
                                        <th class="font-weight-bold text-muted text-uppercase">ORDER STATUS</th>
                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT DATE</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right">TOTAL PAID</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="(Order.paid =='0') && (Order.buyer_id.id == user)">PAY</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.status =='2' && Order.seller_id.id == user">APPROVE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="font-weight-bolder">
                                        <td>BANK TRANSFER</td>
                                        <td><a :href="'/storage/Receipt/'+Order.ref_no" target="_blank">{{Order.ref_no}}</a></td>
                                        <td>
                                            <span v-if="Order.status =='2'" class="label label-warning label-pill label-inline mr-2">PROCESSING</span>
                                            <span v-if="Order.status =='1'" class="label label-success label-pill label-inline mr-2">SUCCESS</span>
                                            <span v-if="Order.status =='3'" class="label label-danger label-pill label-inline mr-2">REJECTED</span>
                                        </td>
                                        <td>{{Order.paid_at}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="BuyerDetails.country =='Malaysia'">RM {{Order.total_paid}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="BuyerDetails.country =='Singapura' || BuyerDetails.country =='Brunei'">$ {{Order.total_paid}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.paid =='0'  && (Order.buyer_id.id == user)">
                                            <a href="javascript:;" class="btn btn-success"  data-toggle="modal" v-on:click="openPayBankTransfer(Order)" title="Pay">
                                                Pay
                                            </a>
                                        </td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.status =='2' && Order.seller_id.id == user"><a class="btn btn-primary" @click="ApproveOrder">Approve</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0 mb-10  d-print-none" v-if="this.Order.payment_methods ==3">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-bold text-muted text-uppercase">METHOD</th>
                                        <th class="font-weight-bold text-muted text-uppercase">BILL CODE</th>
                                        <th class="font-weight-bold text-muted text-uppercase">ORDER STATUS</th>
                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT DATE</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right">TOTAL PAID</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.paid =='0'  && (Order.buyer_id.id == user)">PAY</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.status =='2'  && Order.seller_id.id == user">APPROVE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="font-weight-bolder">
                                        <td>BILLPLZ</td>
                                        <td><a class="" target="_blank" :href="'https://www.billplz-sandbox.com/bills/'+ Order.billcode">{{Order.billcode}}</a></td>
                                        <td>
                                            <span v-if="Order.status =='2'" class="label label-warning label-pill label-inline mr-2">PROCESSING</span>
                                            <span v-if="Order.status =='1'" class="label label-success label-pill label-inline mr-2">SUCCESS</span>
                                            <span v-if="Order.status =='3'" class="label label-danger label-pill label-inline mr-2">REJECTED</span>
                                        </td>
                                        <td>{{Order.paid_at}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right">RM {{Order.total_paid}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.paid =='0'  && (Order.buyer_id.id == user)"><a class="btn btn-success" :href="'https://www.billplz-sandbox.com/bills/'+ Order.billcode">Pay</a></td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.status =='2'  && Order.seller_id.id == user"><a class="btn btn-primary" @click="ApproveOrder">Approve</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0 mb-10  d-print-none" v-if="this.Order.payment_methods ==4">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-bold text-muted text-uppercase">METHOD</th>
                                        <th class="font-weight-bold text-muted text-uppercase">REFERENCE NO</th>
                                        <th class="font-weight-bold text-muted text-uppercase">ORDER STATUS</th>
                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT DATE</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right">TOTAL PAID</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.paid =='0'  && (Order.buyer_id.id == user)">PAY</th>
                                        <th class="font-weight-bold text-muted text-uppercase text-right" v-if="Order.status =='2'  && Order.seller_id.id == user">APPROVE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="font-weight-bolder">
                                        <td>SenangPay</td>
                                        <td><a class="" target="_blank" :href="'https://sandbox.senangpay.my/payment/receipt/'+ Order.ref_no">{{Order.ref_no}}</a></td>
                                        <td>
                                            <span v-if="Order.status =='2'" class="label label-warning label-pill label-inline mr-2">PROCESSING</span>
                                            <span v-if="Order.status =='1'" class="label label-success label-pill label-inline mr-2">SUCCESS</span>
                                            <span v-if="Order.status =='3'" class="label label-danger label-pill label-inline mr-2">REJECTED</span>
                                        </td>
                                        <td>{{Order.paid_at}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right">RM {{Order.total_paid}}</td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.paid =='0'  && (Order.buyer_id.id == user)"><a class="btn btn-success" :href="'senang-pay/'+ Order.id">Pay</a></td>
                                        <td class="text-primary font-size-h3 font-weight-boldest text-right" v-if="Order.status =='2'  && Order.seller_id.id == user"><a class="btn btn-primary" @click="ApproveOrder">Approve</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <agent-bank-transfer-elements></agent-bank-transfer-elements>
    </div>
</template>
<script>
    export default {
        props: ['user','data'],
        data() {
            return {
                image_source: 'storage/Product/',
                Order:{
                    buyer_id:{
                        name:'',
                        id:'',
                        avatar:'',
                    }

                },
                OrderItems:{},
                SellerDetails:[],
                BuyerDetails:[],
            }
        },
        mounted() {
            VueEvent.$on('fetchOrder', () => {
                this.fetchOrder();
            });

        },
        created(){
            this.fetchOrder();
            this.fetchOrderItems();
        },
        methods: {
            openPayBankTransfer(data){
                $(".BankTransferModal").modal('show');
                this.States = data;
            },
            fetchOrder(){
                fetch('/api/v1/orders/HQ/Lists/' + this.data +'/order-details').then(response => response.json())
                    .then(response => {
                        this.Order = response.data;
                        this.BuyerDetails = response.data.buyer_id;
                        console.log(this.BuyerDetails.country);
                        this.fetchSellerDetails();
                    })
                    .catch(error => console.log(error))
            },
            fetchSellerDetails(){
                fetch('/api/v1/team/Lists/' + this.Order.seller_id.id +'/agent-info').then(response => response.json())
                    .then(response => {
                        this.SellerDetails = response.data.user_id;
                    })
                    .catch(error => console.log(error))
            },
            fetchOrderItems(){
                fetch('/api/v1/orders/HQ/Lists/' + this.data +'/order-items').then(response => response.json())
                    .then(response => {
                        this.OrderItems = response.data;
                    })
                    .catch(error => console.log(error))
            },
            ApproveOrder(){
                fetch('/api/v1/orders/team/Updates/'+ this.Order.buyer_id.id+'/'+ this.Order.id+'/approve-order')
                    .then(response => {
                        this.fetchOrder();

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
                        toastr.success("Successfully Approve Order.", "Order Approved");
                    })
                    .catch(error => console.log(error))
            },
            print(){
//                window.print();
                alert('yes');
            }
        }

    }

</script>
<style>
    @media print and (max-width: 1008px) {
        @page {
            size: 330mm 427mm;
            margin: 14mm;
        }
        .container {
            width: 1170px;
        }
        #html1 {
            resolution: 1000dpi;
            background-color: white;
            zoom: 140%;
            margin-top: -40px;
            padding: 0px;
            clear: both;
        }
    }

</style>
