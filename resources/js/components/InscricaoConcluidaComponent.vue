<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <hr class="my-4" />
                    <!--Jumbotron-->
                    <div
                        class="jumbotron text-center mdb-color lighten-2 white-text z-depth-2"
                    >
                        <!--Title-->
                        <h1 class="card-title h2-responsive mt-2 font-bold">
                            <strong>Ciclo Sesc Amazonas</strong>
                        </h1>
                        <!--Subtitle-->
                        <p class="mt-4">
                            <strong
                                >Sua pré-inscrição foi realizada com
                                sucesso!</strong
                            >
                        </p>

                        <!--Text-->
                        <div class="d-flex justify-content-center">
                            <p class="card-text my-2" style="max-width: 43rem">
                                A confirmação dos inscritos será feita por meio
                                do publicação no portal do sesc.
                            </p>
                        </div>

                        <hr class="my-4 rgba-white-light" />
                    </div>
                    <!--Jumbotron-->

                    <hr class="my-4" />
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
                let url = "/api/inscricao";

                axios
                    .post(url, this.entidade)
                    .then((json) => {
                        console.log(json);
                        //sucesso
                        this.loading = true;
                        this.msgSucesso =
                            "Usuário logado com sucesso, aguarde...";

                        //location.href = "home";
                        //envia a requisição para destino
                        // e.target.submit();
                        //next({ path: '/home' });
                    })
                    .catch((error) => {
                        //error
                        this.msgAviso = error.response.data.mensagem;
                        console.log(error.response.data.mensagem);
                        this.entidade = {};
                        //console.log(error.response.status);
                        //console.log(error.response.headers);
                    })
                    .finally(() => {
                        this.loading = false;
                        this.isBotaoEntrarInativo = false;
                        if (this.msgSucesso) {
                            this.isBotaoEntrarInativo = true;
                        }
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
