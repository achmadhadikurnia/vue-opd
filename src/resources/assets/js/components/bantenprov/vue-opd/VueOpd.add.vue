<template>
  <div class="card">
    <div class="card-header">
      <i class="fa fa-table" aria-hidden="true"></i> {{ title }}

      <ul class="nav nav-pills card-header-pills pull-right">
        <li class="nav-item">
          <button class="btn btn-primary btn-sm" role="button" @click="back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
          </button>
        </li>
      </ul>
    </div>

    <div class="card-body">
      <vue-form :state="state" @submit.prevent="onSubmit">

        <validate tag="div">
          <div class="form-group">
            <label for="model-kunker">Kode Unit Kerja</label>
            <input type="text" class="form-control" id="model-kunker" v-model="model.kunker" name="kunker" placeholder="Kode Unit Kerja" required autofocus>
            <field-messages name="kunker" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <validate tag="div">
          <div class="form-group">
            <label for="model-name">Nama Unit Kerja</label>
            <input type="text" class="form-control" id="model-name" v-model="model.name" name="name" placeholder="Nama Unit Kerja" required>
            <field-messages name="name" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <validate tag="div">
          <div class="form-group">
            <label for="model-kunker_sinjab">Kode Unit Kerja Sinjab</label>
            <input type="text" class="form-control" id="model-kunker_sinjab" v-model="model.kunker_sinjab" name="kunker_sinjab" placeholder="Kode Unit Kerja Sinjab">
            <field-messages name="kunker_sinjab" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <validate tag="div">
          <div class="form-group">
            <label for="model-kunker_simral">Kode Unit Kerja Simral</label>
            <input type="text" class="form-control" id="model-kunker_simral" v-model="model.kunker_simral" name="kunker_simral" placeholder="Kode Unit Kerja Simral">
            <field-messages name="kunker_simral" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <validate tag="div">
          <div class="form-group">
            <label for="model-levelunker">Level Unit Kerja</label>
            <input type="text" class="form-control-plaintext" id="model-levelunker" v-model="model.levelunker" name="levelunker" placeholder="Level Unit Kerja" required disabled>
            <input type="hidden" v-model="model.levelunker" name="levelunker">
            <field-messages name="levelunker" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <validate tag="div">
          <div class="form-group">
            <label for="model-njab">Nama Jabatan</label>
            <input type="text" class="form-control" id="model-njab" v-model="model.njab" name="njab" placeholder="Nama Jabatan" required>
            <field-messages name="njab" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <validate tag="div">
          <div class="form-group">
            <label for="model-npej">Nama Pejabat</label>
            <input type="text" class="form-control" id="model-npej" v-model="model.npej" name="npej" placeholder="Nama Pejabat" required>
            <field-messages name="npej" show="$invalid && $submitted" class="text-danger">
              <small class="form-text text-success">Looks good!</small>
              <small class="form-text text-danger" slot="required">This field is a required field</small>
            </field-messages>
          </div>
        </validate>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary" @click="reset">Reset</button>
        </div>

      </vue-form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    var type = this.$route.params.id ? 'Child' : 'Root';

    return {
      state: {},
      title: 'Add  ' + type + ' Vue OPD',
      model: {
        kunker        : "",
        name          : "",
        kunker_sinjab : "",
        kunker_simral : "",
        levelunker    : "",
        njab          : "",
        npej          : ""
      }
    }
  },
  mounted() {
    var type = this.$route.params.id ? '/' + this.$route.params.id : '';

    axios.get('api/vue-opd' + type + '/create')
      .then(response => {
        if (response.data.loaded == true) {
          this.model.kunker         = response.data.vue_opd.kunker;
          this.model.name           = response.data.vue_opd.name;
          this.model.kunker_sinjab  = response.data.vue_opd.kunker_sinjab;
          this.model.kunker_simral  = response.data.vue_opd.kunker_simral;
          this.model.levelunker     = response.data.vue_opd.levelunker;
          this.model.njab           = response.data.vue_opd.njab;
          this.model.npej           = response.data.vue_opd.npej;
        } else {
          alert('Failed');
        }
      })
      .catch(function(response) {
        alert('Break');
        window.location.href = '#/admin/vue-opd';
      });
  },
  methods: {
    onSubmit: function() {
      let app = this;

      if (this.state.$invalid) {
        return;
      } else {
        var type = this.$route.params.id ? '/' + this.$route.params.id : '';

        axios.post('api/vue-opd' + type, {
            kunker        : this.model.kunker,
            name          : this.model.name,
            kunker_sinjab : this.model.kunker_sinjab,
            kunker_simral : this.model.kunker_simral,
            levelunker    : this.model.levelunker,
            njab          : this.model.njab,
            npej          : this.model.npej
          })
          .then(response => {
            if (response.data.loaded == true) {
              if(response.data.error == false){
                alert(response.data.message);
                app.back();
              }else{
                alert(response.data.message);
              }
            } else {
              alert('Failed');
            }
          })
          .catch(function(response) {
            alert('Break');
          });
      }
    },
    reset() {
      var type = this.$route.params.id ? '/' + this.$route.params.id : '';

      axios.get('api/vue-opd' + type + '/create')
        .then(response => {
          if (response.data.loaded == true) {
            this.model.kunker         = response.data.vue_opd.kunker;
            this.model.name           = response.data.vue_opd.name;
            this.model.kunker_sinjab  = response.data.vue_opd.kunker_sinjab;
            this.model.kunker_simral  = response.data.vue_opd.kunker_simral;
            this.model.levelunker     = response.data.vue_opd.levelunker;
            this.model.njab           = response.data.vue_opd.njab;
            this.model.npej           = response.data.vue_opd.npej;
          } else {
            alert('Failed');
          }
        })
        .catch(function(response) {
          alert('Break');
          window.location.href = '#/admin/vue-opd';
        });
    },
    back() {
      window.location = '#/admin/vue-opd';
    }
  }
}
</script>
