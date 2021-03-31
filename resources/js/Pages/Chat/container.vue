<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <room-selection
                    v-if="currentRoom.id"
                    :Rooms="Rooms"
                    :currentRoom="currentRoom"
                    v-on:roomchanged="setRoom($event)"
                />
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <messages :messages="messages" />
                    <input-message
                        :room="currentRoom"
                        v-on:messagesent="getMessages()"
                    />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import messages from "./messages";
import InputMessage from "./inputMessage.vue";
import RoomSelection from "./roomSelection.vue";
export default {
    components: {
        AppLayout,
        messages,
        InputMessage,
        RoomSelection,
    },
    data() {
        return {
            Rooms: [],
            currentRoom: [],
            messages: [],
        };
    },
    watch: {
        currentRoom(val, oldVal) {
            if (oldVal.id) {
                this.disconnect(oldVal);
            }
            this.connect();
        },
    },
    methods: {
        connect() {
            if (this.currentRoom.id) {
                // let vm = this;
                this.getMessages();
                window.Echo.private(`chat.${this.currentRoom.id}`).listen(
                    "NewMessage",
                    (e) => {
                        this.getMessages();
                    }
                );
            }
        },
        disconnect(room) {
            alert(room.id);
            window.Echo.leave(`chat.${room.id}`);
        },
        getRooms() {
            axios
                .get("chat/rooms")
                .then((res) => {
                    this.Rooms = res.data;
                    this.setRoom(res.data[0]);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        setRoom(room) {
            this.currentRoom = room;
        },
        getMessages() {
            axios
                .get(`chat/room/${this.currentRoom.id}/messages`)
                .then((res) => {
                    this.messages = res.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    created() {
        this.getRooms();
        this.getMessages();
    },
};
</script>
