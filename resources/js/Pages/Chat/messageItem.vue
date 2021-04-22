<template>
    <div>
    <div
        style="display:flex; flex-direction:column;width:100%;justify-content:flex-start;align-items:flex-start;"
        v-if="userId !== message.user_id"
    >

                <span
            class="messages rounded-lg"
            style="max-width:40%;self-align:flex-end;"
            :class="['float-left', 'different']">
            <span class="font-semibold antialiased">{{ message.message }}</span>
            </span>
            <i>{{ message.published_at }} {{ message.user.name }} z {{ message.user.school }} {{ message.user.town }}</i>

    </div>

    <div v-else style="display:flex; flex-direction:column;width:100%;justify-content:flex-end;align-items:flex-end;">

                <span
            class="messages rounded-lg"
            style="max-width:40%;self-align:flex-end;"
            :class="['float-right', 'mymessage']">
            <span class="font-semibold antialiased" >{{ message.message }} </span>
           </span>
                    <i>{{ message.published_at }} {{ message.user.name }} z {{ message.user.school }} {{ message.user.town }}</i>

    </div>
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
.dif{
  display:flex;
  flex-direction:column;
}


</style>
