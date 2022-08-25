<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">INSCRITOS - CICLO SESC</div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NOME</th>
                                <th scope="col">CPF</th>
                                <th scope="col">AÇÃO</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr v-for="(entidade, index) in listaEntidades">
                                <th cod="row">
                                    {{ entidade.codigo }}
                                </th>
                                <td>
                                    {{ entidade.nome }}
                                </td>
                                <td>
                                    {{ entidade.rg }}
                                </td>

                                <td class="botao-acao">
                                    <button
                                        class="btn btn-info"
                                        title="Editar"
                                        v-on:click="
                                            direcionaParaEdicao(entidade)
                                        "
                                    >
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    {{ " " }}

                                    <button
                                        type="button"
                                        class="btn bt-sm btn-danger float-right"
                                        data-toggle="modal"
                                        data-target="#exampleModal02"
                                        v-on:click="
                                            preparaRemocao(entidade, index)
                                        "
                                    >
                                        <i class="fa fa-minus-circle"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            entidade: {},
            indiceArray: "",
            usuarioProviderRecebido: this.usuarioProvider,
            listaEntidades: [],
            titulo: "",
            buscaEntidade: "",
            isErroResposta: false,
            isLoading: true,
        };
    },
    mounted() {
        this.carregarLista();
    },
    methods: {
        carregarLista() {
            axios
                // .get(" https://jsonplaceholder.typicode.com/posts ")
                .get("/api/inscricao")
                .then((response) => {
                    this.listaEntidades = response.data;
                    console.log(this.listaEntidades);
                })
                .catch((error) => {
                    if (error.response.status === 401) {
                        //localStorage.removeItem("token");
                        this.$router.push({ name: "login" });
                    }
                    //console.log(error.response.status);
                    this.isErroResposta = true;
                })
                .finally(() => {
                    this.isLoading = false;
                });
        },
    },
};
</script>
