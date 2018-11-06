import User from '../components/User';
import NewUser from '../components/NewUser';

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
    }
];
