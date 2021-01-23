<template>
    <div>
        <div class="form-group">
            <label class="mb-2 text-muted">Country</label>
            <div class="input-group input-group-merge ">
                <div class="input-icon ">
                    <span class="color-primary "></span>
                </div>
                <select class="form-control" style="width:100%" id="update-select-country" v-model="country" name="country" required>
                    <option selected disabled>Country</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Singapura">Singapura</option>
                    <option value="Brunei">Brunei</option>
                </select>
            </div>
        </div>
        <div>
            <div class="form-group">
                <label class="mb-2 text-muted">State</label>
                <div class="input-group input-group-merge ">
                    <div class="input-icon ">
                        <span class="color-primary "></span>
                    </div>
                    <select class="form-control" style="width:100%" id="update-select-state" v-model="state_id" name="state" required>
                        <option selected disabled>State</option>
                        <option  v-for="State in States" :value="State.id">{{ State.name }}</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="mb-2 text-muted">Territory</label>
                <div class="input-group input-group-merge ">
                    <div class="input-icon ">
                        <span class="color-primary "></span>
                    </div>
                    <select class="form-control"style="width:100%" id="update-select-territory" v-model="territory_id" name="territory" required>
                        <option  v-for="Territory in territories" :value="Territory.id">{{ Territory.name }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                States: [],
                territories: [],
                country: '',
                country_id: '',
                state_id: '',
                territory_id: '',
                isMalaysia: false,
            }
        },
        created(){
            //this.getStateName();
        },
        mounted() {
            $("#update-select-country").change(function(){
                this.isMalaysia = false;
                this.country = $("#update-select-country").val();
                if(this.country == 'Malaysia')
                {
//                    this.isMalaysia = !this.isMalaysia;
                    this.country_id = 1;
                    this.getStateNameByCountry();
                }
                if(this.country == 'Singapura' || this.country == 'Brunei')
                {
//                    this.isMalaysia = !this.isMalaysia;
                    this.country_id = 2;
                    this.getStateNameByCountry();
                }
            }.bind(this));
            $("#update-select-state").change(function(){
                this.state_id = $("#update-select-state").val();
                console.log(this.state_id);
                this.getTerritoryName();

            }.bind(this));
            $("#update-select-territory").change(function(){
                this.territory_id = $("#update-select-territory").val();
                console.log(this.territory_id);
            }.bind(this));
        },

        methods : {
//            getStateName(){
//                axios.get('/api/v1/state/Lists/list-state')
//                    .then(function (response) {
//                        this.States = response.data;
//                    }.bind(this));
//            },
            getStateNameByCountry(){
                axios.get('/api/v1/state/Lists/'+ this.country_id +'/list-state-country')
                    .then(function (response) {
                        this.States = response.data;
                    }.bind(this));
            },
            getTerritoryName(){
                this.territories= [];
                axios.get('/api/v1/territory/Lists/'+ this.state_id +'/list-territory-under-state')
                    .then(function (response) {
                        this.territories = response.data;
                    }.bind(this));
            },

        }
    }

</script>
