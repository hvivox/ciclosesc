<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <form action="" @submit.stop.prevent="registrar()">
                        <div class="form-group">
                            <!-- row cabeçalho ----------------------------------------------  -->
                            <div class="row mb-3">
                                <div class="col-sm-9 col-md-9 col-lg-9">
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
                                        class="form-control form-control-lg"
                                        :class="{
                                            'is-invalid':
                                                v$.entidade.NOME.$error,
                                        }"
                                        id="nome"
                                        placeholder="Nome"
                                    />
                                </div>

                                <div
                                    class="form-group col-xs-4 col-sm-3 pull-right"
                                >
                                    <label
                                        for="dataRealizacao"
                                        class="control-label"
                                        >Data Criação</label
                                    >
                                    <span
                                        v-if="
                                            v$.entidade.DTAREALIZACAO.$invalid
                                        "
                                        style="color: red"
                                    >
                                        *Obrigatório</span
                                    ><br />
                                    <input
                                        id="dataRealizacao"
                                        type="date"
                                        name="dataRealizacao"
                                        class="form-control"
                                        :class="{
                                            'is-invalid':
                                                v$.entidade.DTAREALIZACAO
                                                    .$error,
                                        }"
                                        v-model="entidade.DTAREALIZACAO"
                                        required="required"
                                    />
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
    </div>
</template>

<script>
import axios from "axios";
import useVuelidate from "@vuelidate/core";
import { required, minLength, between } from "@vuelidate/validators";
export default {
    data() {
        return {
            //$autoDirty: detecta se o campo foi moficado
            v$: useVuelidate({ $autoDirty: true }),
            entidade: {
                NOME: "",
                NOTADIA: "",
                DTAREALIZACAO: "",
                OBSERVACAO: "",
            },
            errorMsg: "",
        };
    },

    methods: {},
    validations() {
        return {
            entidade: {
                NOME: { required },
                DTAREALIZACAO: { required },
            },
        };
    },
};
</script>
