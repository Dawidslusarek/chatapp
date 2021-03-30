<template>
    <div class="grid grid-cols-2">
        <div class="font-bold text-xl">{{ selected.name }} Chat</div>
        <div class="col-end-auto col-span-2">
            <select
                class="float-right"
                v-model="selected"
                @change="$emit('roomchanged', this.selected)"
            >
                <option
                    v-for="(room, index) in Rooms"
                    :key="index"
                    :value="room"
                >
                    {{ room.name }}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    props: ["Rooms", "currentRoom"],
    data() {
        return {
            seletced: "",
        };
    },
    created() {
        this.selected = this.currentRoom;
    },
};
</script>

<style></style>
