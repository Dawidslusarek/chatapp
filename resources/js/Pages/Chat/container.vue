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
          <messages :messages="messages" :userId="userId" style="height:500px"/>
          <input-message :room="currentRoom" v-on:messagesent="getMessages()" />
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
      userId: null,
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
        Echo.private(`chat.${this.currentRoom.id}`).listen(
          "NewMessage",
          (e) => {
            this.getMessages();
          }
        );
      }
    },
    disconnect(room) {
      Echo.leave(`chat.${room.id}`);
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
          this.messages = res.data[0];
          this.userId = res.data[1];
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    this.getRooms();
  },
};
</script>
