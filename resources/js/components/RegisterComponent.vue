<template>
  <div id="login" v-if="status">
    <div class="container">
      <div class="test">
        <form class="col-md-5" method="POST" ref="infoBox">
          <h5 class="mb-1" @click="home" style="cursor:pointer;">
            <i class="fas fa-angle-left"></i>
            Immoblier.
            <span class="text-danger">ma</span>
          </h5>
          <p>
            Créez un compte afin de profiter des services
            Immobilier.ma en toute simplicité.
            <br />
            <span class="text-muted" v-show="!display">associé à l'adresse e-mail {{ form.email }}</span>
          </p>
          <div v-if="display">
            <div class="form-group">
              <input
                type="text"
                v-bind:class="[
                                    errors.name ? 'is-invalid' : ' ',
                                    'form-control'
                                ]"
                placeholder="Nom"
                autocomplete="name"
                v-model="form.name"
                autofocus
                name="name"
                required
              />
              <span>
                {{
                errors.name ? errors.name[0] : " "
                }}
              </span>
            </div>
            <div class="form-group">
              <input
                type="email"
                v-bind:class="[
                                    errors.email ? 'is-invalid ' : ' ',
                                    'form-control'
                                ]"
                placeholder="Adress email"
                autocomplete="email"
                v-model="form.email"
                name="name"
                required
              />
              <span>
                {{
                errors.email ? errors.email[0] : " "
                }}
              </span>
            </div>
          </div>
          <div v-if="!display">
            <div class="form-group">
              <input
                id="password"
                type="password"
                v-bind:class="[
                                    errors.password ? 'is-invalid ' : ' ',
                                    'form-control'
                                ]"
                v-model="form.password"
                name="password"
                required
                placeholder="Mot de passe"
                autocomplete="current-password"
              />
              <span>
                {{
                errors.password ? errors.password[0] : " "
                }}
              </span>
            </div>
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                v-bind:class="[
                                    errors.password_confirmation
                                        ? 'is-invalid '
                                        : ' ',
                                    'form-control'
                                ]"
                v-model="form.password_confirmation"
                placeholder=" confirmez votre mot de passe"
              />
              <span>
                {{
                errors.password_confirmation
                ? errors.password_confirmation[0]
                : " "
                }}
              </span>
            </div>
          </div>
          <button
            type="button"
            class="btn btn-danger btn-block mt-3"
            v-if="display"
            @click="suivant"
          >Commencer</button>
          <button
            type="button"
            class="btn btn-danger btn-block mt-3"
            @click.prevent="data"
            v-if="!display"
          >Créez un compte</button>
          <h6 class="text-center mt-3">ou connectez-vous en un clic</h6>
          <div class="text-center">
            <a href="#">
              <img src="images/pictos/facebook.png" class="icon" />
            </a>
            <a href="#">
              <img src="images/pictos/google.png" class="icon" />
            </a>
          </div>
          <p class="text-center mt-3">
            Vous avez déjà un compte
            <a href="#">
              <strong>Connectez-vous ?</strong>
            </a>
          </p>
          <div class="text-center">
            En créant ou en vous connectant à un compte, vous
            acceptez nos
            <a href="#">
              <strong>conditions générales</strong>
            </a>
            et notre
            <a href="#">
              <strong>charte de confidentialité.</strong>
            </a>
            <p class="text-muted mt-3">
              Tous droits réservés.
              <br />Copyright (2019 - 2020)-Immobilier.com™
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["route"],
  data() {
    return {
      form: {
        name: null,
        email: null,
        password: null,
        password_confirmation: null
      },
      display: true,
      status: true,
      errors: {
        name: null,
        email: null,
        password: null
      }
    };
  },
  mounted() {
    let height = this.$refs.infoBox.clientHeight;
    let windowhieght = window.innerHeight;
    console.log(height + "-" + windowhieght);
  },
  methods: {
    suivant() {
      if (this.form.name != null && this.form.email != null) {
        this.display = false;
      }
    },
    data() {
      axios
        .post(this.route, this.form)
        .then(res => {
          if (res.data.etat && res.status == 200) {
            this.flachy(res.data.name);
          }
        })
        .catch(error => {
          this.errors = error.response.data.errors;
        });
    },
    home() {
      this.display = !this.display;
      console.log(this.errors.email);
    },
    flachy(msg) {
      this.status = false;
      this.$swal.fire({
        icon: "success",
        title: "votre compte a été créé avec succès",
        showConfirmButton: false,
        timer: 1700
      });

      window.location.href = "/";
    }
  }
};
</script>
