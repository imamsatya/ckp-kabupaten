<template>
    <v-card>
        <v-card-title>
            Users
            <v-spacer></v-spacer>
            <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details>
            </v-text-field>
        </v-card-title>

        <v-btn :disabled="disable" small class="ma-2" tile outlined color="primary" @click="dialog = true">
            <v-icon left>mdi-pencil</v-icon> Tambah User
        </v-btn>
        <v-btn small class="ma-2" tile outlined color="success" @click="importdialog = true">
            <v-icon left>mdi-file-excel</v-icon> Import User
        </v-btn>

        <v-dialog v-model="addUserdialog" persistent max-width="600px">
            <template v-slot:activator="{ on, attrs }">

            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">User Profile</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-row>


                            <v-col cols="12">
                                <v-text-field label="Nama" v-model="user.nama" required></v-text-field>
                                <v-text-field label="Email*" v-model="user.email" required></v-text-field>
                            </v-col>
                            <v-col cols="12">
                                <v-text-field label="Password*" type="password" required v-model="user.password">
                                </v-text-field>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-text-field label="NIP (8 Digit)*" required v-model="user.nip_pendek"></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-text-field label="NIP (16 Digit)*" required v-model="user.nip_panjang">
                                </v-text-field>
                            </v-col>
                            <v-col cols="12">
                                <v-select v-model="user.selectedJabatan" :items="jabatanOptions"
                                    :error-messages="errors" label="Select" data-vv-name="select" required></v-select>

                            </v-col>
                        </v-row>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="blue darken-1" text @click="addUserdialog = false">
                        Close
                    </v-btn>
                    <v-btn color="blue darken-1" text @click="addUser()">
                        Save
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-dialog v-model="importdialog" width="500">
            <v-card>
                <v-card-title class="headline grey lighten-2">
                    Import Users
                </v-card-title>

                <form @submit="formSubmit" enctype="multipart/form-data">
                    <strong>File:</strong>

                    <input type="file" class="form-control" v-on:change="onFileChange">

                    <v-card-actions>
                        <v-spacer />
                        <v-btn color="primary" @click="formSubmit">Proses</v-btn>
                    </v-card-actions>
                </form>

                <v-divider></v-divider>

                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" text @click="dialog = false">
                        I accept
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-data-table :headers="headers" :items="desserts" :search="search"></v-data-table>
    </v-card>
</template>
<script>
    export default {
        data() {
            return {
              //import user
              file_data: [],
                files: [],
                file: '',


                user: {
                    nama: '',
                    email: '',
                    password: '',
                    nip_pendek: '',
                    nip_panjang: '',
                    selectedJabatan: ''
                },
                select: null,
                jabatanOptions: [
                    'Item 1',
                    'Item 2',
                    'Item 3',
                    'Item 4',
                ],

                search: '',
                importdialog: false,
                addUserdialog: false,
                headers: [{
                        text: 'Dessert (100g serving)',
                        align: 'start',
                        sortable: false,
                        value: 'name',
                    },
                    {
                        text: 'Calories',
                        value: 'calories'
                    },
                    {
                        text: 'Fat (g)',
                        value: 'fat'
                    },
                    {
                        text: 'Carbs (g)',
                        value: 'carbs'
                    },
                    {
                        text: 'Protein (g)',
                        value: 'protein'
                    },
                    {
                        text: 'Iron (%)',
                        value: 'iron'
                    },
                ],
                desserts: [{
                        name: 'Frozen Yogurt',
                        calories: 159,
                        fat: 6.0,
                        carbs: 24,
                        protein: 4.0,
                        iron: '1%',
                    },
                    {
                        name: 'Ice cream sandwich',
                        calories: 237,
                        fat: 9.0,
                        carbs: 37,
                        protein: 4.3,
                        iron: '1%',
                    },
                    {
                        name: 'Eclair',
                        calories: 262,
                        fat: 16.0,
                        carbs: 23,
                        protein: 6.0,
                        iron: '7%',
                    },
                    {
                        name: 'Cupcake',
                        calories: 305,
                        fat: 3.7,
                        carbs: 67,
                        protein: 4.3,
                        iron: '8%',
                    },
                    {
                        name: 'Gingerbread',
                        calories: 356,
                        fat: 16.0,
                        carbs: 49,
                        protein: 3.9,
                        iron: '16%',
                    },
                    {
                        name: 'Jelly bean',
                        calories: 375,
                        fat: 0.0,
                        carbs: 94,
                        protein: 0.0,
                        iron: '0%',
                    },
                    {
                        name: 'Lollipop',
                        calories: 392,
                        fat: 0.2,
                        carbs: 98,
                        protein: 0,
                        iron: '2%',
                    },
                    {
                        name: 'Honeycomb',
                        calories: 408,
                        fat: 3.2,
                        carbs: 87,
                        protein: 6.5,
                        iron: '45%',
                    },
                    {
                        name: 'Donut',
                        calories: 452,
                        fat: 25.0,
                        carbs: 51,
                        protein: 4.9,
                        iron: '22%',
                    },
                    {
                        name: 'KitKat',
                        calories: 518,
                        fat: 26.0,
                        carbs: 65,
                        protein: 7,
                        iron: '6%',
                    },
                ],
            }
        },
        mounted() {
            this.getJabatanOptions()
        },

        methods: {
            async addUser() {
                console.log(this.user)
                await axios.post('/admin/adduser', {
                    user: this.user
                })
            },
            async getJabatanOptions() {


                await axios.get('/admin/getjabatan').then(response => {

                    //Logic goes here
                    this.jabatanOptions = response.data


                }).catch(error => {
                    alert(error);
                })

                console.log(this.jabatanOptions)
            },
               onFileChange(e) {

                console.log(e.target.files[0]);

                this.file = e.target.files[0];

            },

           async formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                const configx = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        // 'x-csrf-token': document.querySelectorAll('meta[name=csrf-token]')[0].getAttributeNode('content').value,
                        //  Authorization: 'Bearer ' + localStorage.getItem('token')
                    }

                }
                let formData = new FormData();

                formData.append('file', this.file);

                // let data = new FormData(); 
                // data.append('file', this.avatar);
                // data.append('_method', 'put'); // add this
                // formData.append('_method', 'put'); 


                console.log('formData', formData)
               await axios.post('importdata', formData, configx)
                    .then(response => {
                        console.log(response)
                    }).catch(error => {
                        console.log('error', error.response)
                    })
                   
              
                

            }

        }
    }

</script>
