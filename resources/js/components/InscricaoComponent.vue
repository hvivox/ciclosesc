<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="py-5 text-center">
                            <img
                                class="d-block mx-auto mb-4"
                                src="logo-sesc.png"
                                alt=""
                            />
                            <h2>Ciclo Sesc</h2>
                            <p class="lead">
                                O ciclismo pode se caracterizar como uma prática
                                de lazer associada à atividade física, à saúde e
                                à qualidade de vida; bem como um meio para que
                                as pessoas possam conhecer as suas cidades, sua
                                arquitetura, pontos turísticos, patrimônios
                                históricos e culturais. Este evento se configura
                                como uma oportunidade de encontro, promovendo a
                                socialização e integração entre os
                                participantes, suas famílias e o Sesc.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <h4
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <span class="text-muted">Informações</span>
                                </h4>
                                <ul class="list-group mb-3">
                                    <li
                                        class="list-group-item d-flex justify-content-between lh-condensed"
                                    >
                                        <div>
                                            <h6 class="my-0">Orientações</h6>
                                            <small class="text-muted"
                                                >Brief description</small
                                            >
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between lh-condensed"
                                    >
                                        <div>
                                            <h6 class="my-0">Programação</h6>
                                            <small class="text-muted"
                                                >Brief description</small
                                            >
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between lh-condensed"
                                    >
                                        <div>
                                            <h6 class="my-0">Percuso</h6>
                                            <small class="text-muted"
                                                >Brief description</small
                                            >
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8 order-md-1">
                                <form class="needs-validation">
                                    <!-- FORMULARIO ################################################################################################  -->

                                    <h4 class="mb-3">Pré-inscrição</h4>

                                    <!-- NOME COMPLETO ------------------------------------------------------------ -->
                                    <div class="form-group">
                                        <label for="nome">Nome Completo</label>
                                        <span
                                            v-if="
                                                v$.entidade.CICLONOME.$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        ><br />
                                        <input
                                            v-model="entidade.CICLONOME"
                                            type="text"
                                            class="form-control form-control-md"
                                            :class="{
                                                'is-invalid':
                                                    v$.entidade.CICLONOME
                                                        .$error,
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
                                                'is-invalid':
                                                    v$.entidade.CICLOCPF.$error,
                                            }"
                                            id="cpf"
                                            placeholder="Ex.: 000.000.000-00"
                                        />
                                        <small
                                            v-if="v$.entidade.CICLOCPF.$error"
                                        >
                                            {{
                                                v$.entidade.CICLOCPF.$errors[0]
                                                    .$message
                                            }}
                                        </small>
                                    </div>

                                    <!-- IDADE ----------------------------------------------------------------------------- -->

                                    <div class="form-group">
                                        <label for="idade">Idade</label>
                                        <span
                                            v-if="
                                                v$.entidade.CICLOIDADE.$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <input
                                            v-model="entidade.CICLOIDADE"
                                            type="text"
                                            class="form-control form-control-md"
                                            :class="{
                                                'is-invalid':
                                                    v$.entidade.CICLOIDADE
                                                        .$error,
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
                                            v-if="
                                                v$.entidade.CICLOSEXO.$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOSEXO"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </div>

                                    <!-- TELEFONE ----------------------------------------------------------------------------- -->

                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <span
                                            v-if="
                                                v$.entidade.CICLOTELEFONE
                                                    .$invalid
                                            "
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
                                                    v$.entidade.CICLOTELEFONE
                                                        .$error,
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
                                            v-if="
                                                v$.entidade.CICLOEMAIL.$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <input
                                            v-model="entidade.CICLOEMAIL"
                                            type="email"
                                            class="form-control form-control-md"
                                            :class="{
                                                'is-invalid':
                                                    v$.entidade.CICLOEMAIL
                                                        .$error,
                                            }"
                                            id="email"
                                            placeholder="Email"
                                        />
                                    </div>
                                    <!-- POSSUIBICICLETA ----------------------------------------------------------------------------- -->

                                    <div class="form-group">
                                        <label>Possui Bicicleta?</label>
                                        <span
                                            v-if="
                                                v$.entidade.CICLOBIKE.$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOBIKE"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>

                                    <!-- POSSUIEQUIPAMENTO ----------------------------------------------------------------------------- -->

                                    <div class="form-group">
                                        <label
                                            >Possui equipamentos de segurança
                                            para ciclismo?</label
                                        >
                                        <span
                                            v-if="
                                                v$.entidade.CICLOEQUIPAMENTO
                                                    .$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOEQUIPAMENTO"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>

                                    <!-- PRATICA ATIVIDADE ----------------------------------------------------------------------------- -->
                                    <div class="form-group">
                                        <label>Pratica Atividade Física?</label>
                                        <span
                                            v-if="
                                                v$.entidade.CICLOESPORTE
                                                    .$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOESPORTE"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>

                                    <!-- JA PARTICIPOU DO CICLO ----------------------------------------------------------------------------- -->
                                    <div class="form-group">
                                        <label
                                            >Já participou de alguma edição do
                                            Ciclo Sesc?</label
                                        >
                                        <span
                                            v-if="
                                                v$.entidade.CICLOPARTICIPOU
                                                    .$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOPARTICIPOU"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>

                                    <!-- COMO FICOU SABENDO ----------------------------------------------------------------------------- -->
                                    <div class="form-group">
                                        <label
                                            >Como ficou sabendo sobre o
                                            evento?</label
                                        >
                                        <span
                                            v-if="
                                                v$.entidade.CICLOSABENDO
                                                    .$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOSABENDO"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="PS">
                                                Portal do Sesc
                                            </option>
                                            <option value="RS">
                                                Redes Sociais
                                            </option>
                                            <option value="CA">
                                                Central de Atendimento Sesc
                                            </option>
                                            <option value="O">Outros</option>
                                        </select>
                                    </div>

                                    <!-- DECLARA APTO ----------------------------------------------------------------------------- -->
                                    <div class="form-group">
                                        <label
                                            >Declara está apto (a) fisicamente
                                            para participação no Passeio
                                            Ciclístico?</label
                                        >
                                        <span
                                            v-if="
                                                v$.entidade.CICLOAPTO.$invalid
                                            "
                                            style="color: red"
                                        >
                                            *Obrigatório</span
                                        >

                                        <select
                                            v-model="entidade.CICLOAPTO"
                                            class="custom-select"
                                        >
                                            <option disabled value="">
                                                Selecione
                                            </option>
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>

                                    <hr class="mb-4" />
                                    <button
                                        class="btn btn-primary btn-lg btn-block"
                                        v-on:click.stop.prevent="
                                            salvarAtualizar()
                                        "
                                        :disabled="
                                            isTemAlgumCampoInvalidoNoFormulario ||
                                            isloading
                                        "
                                        type="button"
                                    >
                                        ENVIAR
                                        <i
                                            v-if="isloading"
                                            class="fa fa-spinner fa-spin fa-fw"
                                        ></i>
                                    </button>
                                </form>

                                <!-- ########################################################################-->
                            </div>
                        </div>

                        <footer
                            class="my-5 pt-5 text-muted text-center text-small"
                        >
                            <p class="mb-1">© 2022-2022 Sesc/AM</p>
                        </footer>
                    </div>

                    <!-- @submit.stop.prevent="registrar()" -->
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
                    .then((json) => {
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
