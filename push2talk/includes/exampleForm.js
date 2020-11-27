export const messageFormExample = {
    formTitle: `Message Form Example`,
    formDescription: `Reach out with accuracy`,
    fields: [
        {
            label: `Your message`,
            helperText: `About the length of a tweet`,
            prompt: `Please write a message`,
            type: `InputString`,
            autoFocus: true,
            required: true,
            multiline: true,
            style: `outlined`, // outlined || filled
            rows: 5,
        },
    ],
    icon: `message`,
    buttonText: `Get in touch`,
    buttonAction: {
        verb: `POST`,
        url:  `/wp-content/plugins/push2talk/process.php`,
    }
}
