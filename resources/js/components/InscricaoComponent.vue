<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="container">
                        <div class="py-5 text-center">
                            <img
                                class="d-block mx-auto mb-4"
                                src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg"
                                alt=""
                                width="72"
                                height="72"
                            />
                            <h2>Checkout form</h2>
                            <p class="lead">
                                Below is an example form built entirely with
                                Bootstrap's form controls. Each required form
                                group has a validation state that can be
                                triggered by attempting to submit the form
                                without completing it.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <h4
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <span class="text-muted">Your cart</span>
                                    <span
                                        class="badge badge-secondary badge-pill"
                                        >3</span
                                    >
                                </h4>
                                <ul class="list-group mb-3">
                                    <li
                                        class="list-group-item d-flex justify-content-between lh-condensed"
                                    >
                                        <div>
                                            <h6 class="my-0">Product name</h6>
                                            <small class="text-muted"
                                                >Brief description</small
                                            >
                                        </div>
                                        <span class="text-muted">$12</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between lh-condensed"
                                    >
                                        <div>
                                            <h6 class="my-0">Second product</h6>
                                            <small class="text-muted"
                                                >Brief description</small
                                            >
                                        </div>
                                        <span class="text-muted">$8</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between lh-condensed"
                                    >
                                        <div>
                                            <h6 class="my-0">Third item</h6>
                                            <small class="text-muted"
                                                >Brief description</small
                                            >
                                        </div>
                                        <span class="text-muted">$5</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between bg-light"
                                    >
                                        <div class="text-success">
                                            <h6 class="my-0">Promo code</h6>
                                            <small>EXAMPLECODE</small>
                                        </div>
                                        <span class="text-success">-$5</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between"
                                    >
                                        <span>Total (USD)</span>
                                        <strong>$20</strong>
                                    </li>
                                </ul>

                                <form class="card p-2">
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Promo code"
                                        />
                                        <div class="input-group-append">
                                            <button
                                                type="submit"
                                                class="btn btn-secondary"
                                            >
                                                Redeem
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8 order-md-1">
                                <h4 class="mb-3">Billing address</h4>
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName"
                                                >First name</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="firstName"
                                                placeholder=""
                                                value=""
                                                required=""
                                            />
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName"
                                                >Last name</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="lastName"
                                                placeholder=""
                                                value=""
                                                required=""
                                            />
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    >@</span
                                                >
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="username"
                                                placeholder="Username"
                                                required=""
                                            />
                                            <div
                                                class="invalid-feedback"
                                                style="width: 100%"
                                            >
                                                Your username is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email"
                                            >Email
                                            <span class="text-muted"
                                                >(Optional)</span
                                            ></label
                                        >
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="you@example.com"
                                        />
                                        <div class="invalid-feedback">
                                            Please enter a valid email address
                                            for shipping updates.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="address"
                                            placeholder="1234 Main St"
                                            required=""
                                        />
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address2"
                                            >Address 2
                                            <span class="text-muted"
                                                >(Optional)</span
                                            ></label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="address2"
                                            placeholder="Apartment or suite"
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <label for="country">Country</label>
                                            <select
                                                class="custom-select d-block w-100"
                                                id="country"
                                                required=""
                                            >
                                                <option value="">
                                                    Choose...
                                                </option>
                                                <option>United States</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid country.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="state">State</label>
                                            <select
                                                class="custom-select d-block w-100"
                                                id="state"
                                                required=""
                                            >
                                                <option value="">
                                                    Choose...
                                                </option>
                                                <option>California</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="zip">Zip</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="zip"
                                                placeholder=""
                                                required=""
                                            />
                                            <div class="invalid-feedback">
                                                Zip code required.
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4" />
                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="same-address"
                                        />
                                        <label
                                            class="custom-control-label"
                                            for="same-address"
                                            >Shipping address is the same as my
                                            billing address</label
                                        >
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="save-info"
                                        />
                                        <label
                                            class="custom-control-label"
                                            for="save-info"
                                            >Save this information for next
                                            time</label
                                        >
                                    </div>
                                    <hr class="mb-4" />

                                    <h4 class="mb-3">Payment</h4>

                                    <div class="d-block my-3">
                                        <div
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                id="credit"
                                                name="paymentMethod"
                                                type="radio"
                                                class="custom-control-input"
                                                checked=""
                                                required=""
                                            />
                                            <label
                                                class="custom-control-label"
                                                for="credit"
                                                >Credit card</label
                                            >
                                        </div>
                                        <div
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                id="debit"
                                                name="paymentMethod"
                                                type="radio"
                                                class="custom-control-input"
                                                required=""
                                            />
                                            <label
                                                class="custom-control-label"
                                                for="debit"
                                                >Debit card</label
                                            >
                                        </div>
                                        <div
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                id="paypal"
                                                name="paymentMethod"
                                                type="radio"
                                                class="custom-control-input"
                                                required=""
                                            />
                                            <label
                                                class="custom-control-label"
                                                for="paypal"
                                                >Paypal</label
                                            >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name"
                                                >Name on card</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="cc-name"
                                                placeholder=""
                                                required=""
                                            />
                                            <small class="text-muted"
                                                >Full name as displayed on
                                                card</small
                                            >
                                            <div class="invalid-feedback">
                                                Name on card is required
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number"
                                                >Credit card number</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="cc-number"
                                                placeholder=""
                                                required=""
                                            />
                                            <div class="invalid-feedback">
                                                Credit card number is required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration"
                                                >Expiration</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="cc-expiration"
                                                placeholder=""
                                                required=""
                                            />
                                            <div class="invalid-feedback">
                                                Expiration date required
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration"
                                                >CVV</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="cc-cvv"
                                                placeholder=""
                                                required=""
                                            />
                                            <div class="invalid-feedback">
                                                Security code required
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4" />
                                    <button
                                        class="btn btn-primary btn-lg btn-block"
                                        type="submit"
                                    >
                                        Continue to checkout
                                    </button>
                                </form>
                            </div>
                        </div>

                        <footer
                            class="my-5 pt-5 text-muted text-center text-small"
                        >
                            <p class="mb-1">© 2017-2018 Company Name</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </footer>
                    </div>

                    <!-- @submit.stop.prevent="registrar()" -->

                    <h1 v-if="isloading">CARREGANDO....</h1>
                    <form>
                        <!-- NOME COMPLETO ------------------------------------------------------------ -->
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <span
                                v-if="v$.entidade.CICLONOME.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            ><br />
                            <input
                                v-model="entidade.CICLONOME"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.CICLONOME.$error,
                                }"
                                id="nome"
                                placeholder="Nome"
                            />
                        </div>
                        <!-- CPF ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <span
                                v-if="v$.entidade.CICLOCPF.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.CICLOCPF"
                                v-mask="'###.###.###-##'"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.CICLOCPF.$error,
                                }"
                                id="cpf"
                                placeholder="Ex.: 000.000.000-00"
                            />
                            <small v-if="v$.entidade.CICLOCPF.$error">
                                {{ v$.entidade.CICLOCPF.$errors[0].$message }}
                            </small>
                        </div>

                        <!-- IDADE ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <span
                                v-if="v$.entidade.CICLOIDADE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.CICLOIDADE"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.CICLOIDADE.$error,
                                }"
                                id="idade"
                                v-mask="'###'"
                                placeholder="Idade"
                            />
                        </div>

                        <!-- POSSUIBICICLETA ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label>Sexo</label>
                            <span
                                v-if="v$.entidade.CICLOSEXO.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOSEXO"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>

                        <!-- TELEFONE ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <span
                                v-if="v$.entidade.CICLOTELEFONE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.CICLOTELEFONE"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid':
                                        v$.entidade.CICLOTELEFONE.$error,
                                }"
                                id="telefone"
                                placeholder="Ex: (99) 99999-9999"
                                v-mask="'(##) #####-####'"
                            />
                        </div>
                        <!-- EMAIL ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label for="email">Email</label>
                            <span
                                v-if="v$.entidade.CICLOEMAIL.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.CICLOEMAIL"
                                type="email"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.CICLOEMAIL.$error,
                                }"
                                id="email"
                                placeholder="Email"
                            />
                        </div>
                        <!-- POSSUIBICICLETA ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label>Possui Bicicleta?</label>
                            <span
                                v-if="v$.entidade.CICLOBIKE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOBIKE"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>

                        <!-- POSSUIEQUIPAMENTO ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label
                                >Possui equipamentos de segurança para
                                ciclismo?</label
                            >
                            <span
                                v-if="v$.entidade.CICLOEQUIPAMENTO.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOEQUIPAMENTO"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>

                        <!-- PRATICA ATIVIDADE ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label>Pratica Atividade Física?</label>
                            <span
                                v-if="v$.entidade.CICLOESPORTE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOESPORTE"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>

                        <!-- JA PARTICIPOU DO CICLO ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label
                                >Já participou de alguma edição do Ciclo
                                Sesc?</label
                            >
                            <span
                                v-if="v$.entidade.CICLOPARTICIPOU.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOPARTICIPOU"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>

                        <!-- COMO FICOU SABENDO ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label>Como ficou sabendo sobre o evento?</label>
                            <span
                                v-if="v$.entidade.CICLOSABENDO.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOSABENDO"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="PS">Portal do Sesc</option>
                                <option value="RS">Redes Sociais</option>
                                <option value="CA">
                                    Central de Atendimento Sesc
                                </option>
                                <option value="O">Outros</option>
                            </select>
                        </div>

                        <!-- DECLARA APTO ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label
                                >Declara está apto (a) fisicamente para
                                participação no Passeio Ciclístico?</label
                            >
                            <span
                                v-if="v$.entidade.CICLOAPTO.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.CICLOAPTO"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>

                        <!-- BOTAO ----------------------------------------------------------------------------- -->
                        <div class="card-footer">
                            <button
                                v-on:click.stop.prevent="salvarAtualizar()"
                                type="button"
                                class="btn btn-primary"
                                :disabled="isTemAlgumCampoInvalidoNoFormulario"
                            >
                                ENVIAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <p v-for="error of v$.entidade.CPF.$errors" :key="error.$uid">
            <pre>{{ v$.entidade.CPF }}</pre>
            <pre>{{ error }}</pre>
            <strong>{{ error.$message }}</strong>
        </p> -->
</template>

<script>
import axios from "axios";
import useVuelidate from "@vuelidate/core";
import { required, minLength, between, helpers } from "@vuelidate/validators";
export default {
    data() {
        return {
            //$autoDirty: detecta se o campo foi moficado
            v$: useVuelidate({ $autoDirty: true }),
            entidade: {
                CICLONOME: "",
                CICLOCPF: "",
                CICLOIDADE: "",
                CICLOSEXO: "",
                CICLOTELEFONE: "",
                CICLOEMAIL: "",
                CICLOBIKE: "",
                CICLOEQUIPAMENTO: "",
                CICLOPRATICAESPORTE: "",
                CICLOPARTICIPOU: "",
                CICLOSABENDO: "",
                CICLOAPTO: "",
            },
            errorMsg: "",
            isloading: false,
        };
    },
    computed: {
        isTemAlgumCampoInvalidoNoFormulario() {
            return this.v$.$invalid;
        },
    },
    methods: {
        salvarAtualizar() {
            this.v$.$validate();
            if (!this.v$.$error) {
                this.isloading = true;

                let url = "/inscricao";
                axios
                    .post(url, this.entidade)
                    .then((response) => {
                        //sucesso
                        location.href = "inscricao-concluida";
                        //this.loading = true;
                        //next({ path: '/home' });
                    })
                    .catch((error) => {
                        //error
                        this.msgAviso = error.response.data.mensagem;
                        this.entidade = {};
                        this.isloading = false;
                        //console.log(error.response.data.mensagem);

                        //console.log(error.response.headers);
                    })
                    .finally(() => {
                        this.isloading = false;
                    });
            } else {
                alert("FORM COM FALHA");
            }
            //this.v$.$touch();
        },

        registrar() {
            alert("gravando cadastro");
        },
    },

    validations() {
        return {
            entidade: {
                CICLONOME: { required },
                CICLOCPF: {
                    required: helpers.withMessage(
                        "*Campo Obrigatório!",
                        required
                    ),
                    validarCPF: helpers.withMessage(
                        "*CPF inválido!",
                        validarCPF
                    ),
                },

                CICLOIDADE: { required },
                CICLOSEXO: { required },
                CICLOTELEFONE: { required },
                CICLOEMAIL: "",
                CICLOBIKE: { required },
                CICLOEQUIPAMENTO: { required },
                CICLOESPORTE: { required },
                CICLOPARTICIPOU: { required },
                CICLOSABENDO: { required },
                CICLOAPTO: { required },
            },
        };
    },
};

// VALIDAÇÃO DO CPF -------------------------------------------
const validarCPF = function (cpf) {
    cpf = cpf.replace(/\D/g, "");
    if (cpf.toString().length != 11 || /^(\d)\1{10}$/.test(cpf)) return false;
    var result = true;
    [9, 10].forEach(function (j) {
        var soma = 0,
            r;
        cpf.split(/(?=)/)
            .splice(0, j)
            .forEach(function (e, i) {
                soma += parseInt(e) * (j + 2 - (i + 1));
            });
        r = soma % 11;
        r = r < 2 ? 0 : 11 - r;
        if (r != cpf.substring(j, j + 1)) result = false;
    });
    return result;
};
</script>
