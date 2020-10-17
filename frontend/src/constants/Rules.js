export const rulesForm = {
    username:  
        {
            required: true,
            message: 'Please input your username!',
        },
    email:
        {
            type: 'email',
            message: 'The input is not valid E-mail!',
        },
    password:
        {
            required: true,
            message: 'Please input your password!',
        },
}