import User from '../components/User';
import NewUser from '../components/NewUser';
import ResetPassword from '../components/ResetPassword';

export default [
    {
        path: '/admin/users',
        name: 'user',
        component: User
    },
    {
        path: '/admin/users/create',
        name: 'user.create',
        component: NewUser
    },
    {
        path: '/admin/users/:id/edit',
        name: 'user.edit',
        component: NewUser
    },
    {
        path: '/admin/user/reset_pass/edit',
        name: 'reset',
        component: ResetPassword
    }
];
