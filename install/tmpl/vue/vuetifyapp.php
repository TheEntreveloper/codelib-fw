<?php
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@1.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
<div id="app">
    <v-app>
        <v-content>
            <v-container fill-height
                         fluid
            >
                <v-layout>
                    <v-flex xs12 sm6 offset-sm3>
                        <v-card>
                            <v-card-title>
                                <div>
                                    <span class="grey--text">Welcome to the CodeLib (CL) Wizard</span><br>
                                    <span>The wizard will help you start creating your CL App in a few steps</span><br>
                                </div>
                            </v-card-title>
                            <v-card-text class="font-weight-bold">
                                <cl-pag :np="5" :page="currstep"></cl-pag>
                                <div v-if="currstep == 0">
                                    <span>Or you can connect to an existing CL App</span>
                                    <v-text-field
                                        v-model="apppath"
                                        :counter="50"
                                        label="Full path to existing app folder (writable)"
                                        required
                                    ></v-text-field>
                                </div>
                                <todo-comp :page="currstep"></todo-comp>
                            </v-card-text>
                            <v-card-actions>
                                <v-btn v-if="currstep !== diagstep" flat color="orange" @click="next">{{ btnaction }}</v-btn>
                                <v-btn v-if="currstep !== diagstep" flat color="orange">Cancel</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
                <!--                <h1>Welcome to the CodeLib (CL) Wizard</h1>-->
                <!--                <h3>The wizard will help you start creating your CL App in a few steps</h3>-->
                <!--                <cl-pag :np="5" :page="1"></cl-pag>-->
                <!--                <todo-comp :cn="1"></todo-comp>-->
            </v-container>
        </v-content>
    </v-app>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@1.x/dist/vuetify.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vuex"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script src="install/js/Step2.js"></script>
<script src="install/js/Introspective.js"></script>
<script src="install/js/wz.js"></script>
</body>
</html>
