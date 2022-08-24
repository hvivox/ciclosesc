<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <!-- @submit.stop.prevent="registrar()" -->
                    <form>
                        <!-- NOME COMPLETO ------------------------------------------------------------ -->
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <span
                                v-if="v$.entidade.NOME.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            ><br />
                            <input
                                v-model="entidade.NOME"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.NOME.$error,
                                }"
                                id="nome"
                                placeholder="Nome"
                            />
                        </div>
                        <!-- CPF ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <span
                                v-if="v$.entidade.CPF.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.CPF"
                                v-mask="'###.###.###-##'"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.CPF.$error,
                                }"
                                id="cpf"
                                placeholder="Ex.: 000.000.000-00"
                            />
                            <small v-if="v$.entidade.CPF.$error">
                                {{ v$.entidade.CPF.$errors[0].$message }}
                            </small>
                        </div>

                        <!-- RG ----------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <label for="rg">RG</label>
                            <span
                                v-if="v$.entidade.RG.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.RG"
                                type="txt"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.RG.$error,
                                }"
                                id="rg"
                                placeholder="RG"
                            />
                        </div>

                        <!-- IDADE ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <span
                                v-if="v$.entidade.IDADE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.IDADE"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.IDADE.$error,
                                }"
                                id="idade"
                                v-mask="'###'"
                                placeholder="Idade"
                            />
                        </div>
                        <!-- TELEFONE ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <span
                                v-if="v$.entidade.TELEFONE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.TELEFONE"
                                type="text"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.TELEFONE.$error,
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
                                v-if="v$.entidade.EMAIL.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <input
                                v-model="entidade.EMAIL"
                                type="email"
                                class="form-control form-control-md"
                                :class="{
                                    'is-invalid': v$.entidade.EMAIL.$error,
                                }"
                                id="email"
                                placeholder="Email"
                            />
                        </div>
                        <!-- POSSUIBICICLETA ----------------------------------------------------------------------------- -->

                        <div class="form-group">
                            <label>Possui Bicicleta?</label>
                            <span
                                v-if="v$.entidade.POSSUIBIKE.$invalid"
                                style="color: red"
                            >
                                *Obrigatório</span
                            >

                            <select
                                v-model="entidade.POSSUIBIKE"
                                class="custom-select"
                            >
                                <option disabled value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
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
                NOME: "",
                CPF: "",
                RG: "",
                IDADE: "",
                TELEFONE: "",
                EMAIL: "",
                POSSUIBIKE: "",
                PRATICAESPORTE: "",
                SEXO: "",
            },
            errorMsg: "",
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
                alert("Form submetido com sucesso");
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
                NOME: { required },
                CPF: {
                    required: helpers.withMessage(
                        "*Campo Obrigatório!",
                        required
                    ),
                    validarCPF: helpers.withMessage(
                        "*CPF inválido!",
                        validarCPF
                    ),
                },
                RG: { required },
                IDADE: { required },
                TELEFONE: { required },
                EMAIL: "",
                POSSUIBIKE: { required },
                /*PRATICAESPORTE: { required },
                SEXO: { required },*/
            },
        };
    },
};

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
