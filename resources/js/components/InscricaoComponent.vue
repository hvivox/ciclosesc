<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <!-- @submit.stop.prevent="registrar()" -->
                    <form action="">
                        <div class="form-group">
                            <!-- row cabeçalho ----------------------------------------------  -->

                            <div class="row mb-3">
                                <div class="col-sm-8 col-md-8 col-lg-8">
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
                                            'is-invalid':
                                                v$.entidade.NOME.$error,
                                        }"
                                        id="nome"
                                        placeholder="Nome"
                                    />
                                </div>

                                <div class="col-sm-8 col-md-8 col-lg-8">
                                    <label for="nome">CPF</label>
                                    <span
                                        v-if="v$.entidade.CPF.$invalid"
                                        style="color: red"
                                    >
                                        *Obrigatório</span
                                    ><br />

                                    <input
                                        v-model="entidade.CPF"
                                        v-mask="'###.###.###-##'"
                                        type="text"
                                        class="form-control form-control-md"
                                        :class="{
                                            'is-invalid':
                                                v$.entidade.CPF.$error,
                                        }"
                                        id="CPF"
                                        placeholder="Ex.: 000.000.000-00"
                                    />
                                    <small v-if="v$.entidade.CPF.$error">
                                        {{
                                            v$.entidade.CPF.$errors[0].$message
                                        }}
                                    </small>
                                </div>
                            </div>

                            <!-- fim row cabeçalho ----------------------------------------------  -->
                        </div>

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

        <!-- <p v-for="error of v$.entidade.CPF.$errors" :key="error.$uid">
            <pre>{{ v$.entidade.CPF }}</pre>
            <pre>{{ error }}</pre>
            <strong>{{ error.$message }}</strong>
        </p> -->
    </div>
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
                /*RG: { required },
                IDADE: { required },
                TELEFONE: { required },
                EMAIL: "",
                POSSUIBIKE: { required },
                PRATICAESPORTE: { required },
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
