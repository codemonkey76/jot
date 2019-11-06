<template>
<div>
    <form @submit.prevent="submitForm">
        <input-field
            :errors="errors"
            name="name"
            label="Contact name"
            placeholder="Contact name"
            @update:field="form.name = $event"/>

        <input-field
            :errors="errors"
            name="email"
            label="Contact Email"
            placeholder="Contact Email"
            @update:field="form.email = $event"/>

        <input-field
            :errors="errors"
            name="company"
            label="Company"
            placeholder="Company"
            @update:field="form.company = $event"/>

        <input-field
            :errors="errors"
            name="birthday"
            label="Birthday"
            placeholder="dd/mm/yyyy"
            @update:field="form.birthday = $event"/>


        <div class="flex justify-end">
            <button class="py-2 px-4 rounded border text-red-700 mr-5 hover:border-red-700">Cancel</button>
            <button class="bg-blue-500 py-2 px-4 text-white rounded hover:bg-blue-400">Add New Contact</button>
        </div>
    </form>
</div>
</template>

<script>
    import InputField from "../components/InputField";
    export default {
        name: "ContactsCreate",
        components: {InputField},
        data()
        {
            return {
                form: {
                    'name': '',
                    'email': '',
                    'company': '',
                    'birthday': ''
                },
                errors: null
            }
        },
        methods: {
            submitForm() {
                axios.post('/api/contacts', this.form)
                    .then(response => {


                    }).catch(errors => {
                        this.errors = errors.response.data.errors;
                });
            }
        }
    }
</script>

<style scoped>

</style>
