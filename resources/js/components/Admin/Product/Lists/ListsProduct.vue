<template>
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">Product
                    <span class="d-block text-muted pt-2 font-size-sm">List of Products</span>
                </h3>
            </div>
        </div>
        <div class="card-body">
            <product-elements :data="this.Products"></product-elements>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                Products:[],
                dataTable:null,
            }
        },
        created(){
            this.fetchProduct();
        },
        mounted() {
            VueEvent.$on('fetchProduct', () => {
                this.fetchProduct();
            });
        },

        methods : {
            fetchProduct(){
                fetch('/api/v1/product/Lists/products').then(response => response.json())
                    .then(response => {
                        this.Products = response.data;
                        console.log(this.Products);
                        $('#kt_datatable').DataTable().destroy();
                        this.$nextTick(() =>
                        {
                            $('#kt_datatable').DataTable(
                                {
                                    responsive: true,
                                    pagingType: 'full_numbers',
                                    columnDefs: [
                                        { "width": "50px", "targets": 0 },
                                        { "width": "450px", "targets": 1 },
                                        { "width": "50px", "targets": 2 },
                                        { "width": "50px", "targets": 3 },
                                        { "width": "100px", "targets": 4 },
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

                    })
                    .catch(error => console.log(error))
            },
        }
    }

</script>
