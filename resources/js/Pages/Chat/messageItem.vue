<template>
    <div>
        <!-- <div v-if="time <= message.created_at"> -->
    <div

        v-if="userId !== message.user_id"
    >

                <span
            class="messages rounded-lg"
            :class="['float-left', 'different']">
            <span class="font-semibold antialiased">{{ message.user.name }} z {{ message.user.school }} {{ message.user.town }} : {{ message.message }}{{message.publihed_at}}</span>
        </span>


    </div>

    <div v-else >
                <span
            class="messages rounded-lg"
            :class="['float-right', 'mymessage']">
            <span class="font-semibold antialiased">{{ message.message }} {{ message.user.name }} {{message.publihed_at}}</span
            >
        </span>
    </div>
    <!-- </div> -->
    </div>
</template>

<script>
export default {
  props: ["message", "userId"],
};
</script>

<style>
.messages {
  padding: 5px 10px;
  margin: 5px 0px;
  width: auto;
  color: white;
}
.mymessage {
  background: #3a2fce;
}
.different {
  background: #838383;
}
</style>
