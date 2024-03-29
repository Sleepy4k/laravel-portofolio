// Import Core Libraries
import { useEffect } from "react";
import { Head, Link, useForm } from "@inertiajs/inertia-react";

// Import Layouts
import GuestLayout from "@/Layouts/GuestLayout";

// Import Custom Components
import Checkbox from "@/Components/Checkbox";
import TextInput from "@/Components/TextInput";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";

export default function Login({ status }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: "",
    });

    useEffect(() => {
        return () => {
            reset("password");
        };
    }, []);

    const onHandleChange = (event) => {
        setData(
            event.target.name,
            event.target.type === "checkbox"
                ? event.target.checked
                : event.target.value
        );
    };

    const submit = (e) => {
        e.preventDefault();

        post(route("login.store"));
    };

    return (
        <GuestLayout>
            <Head title="Log in" />

            {status && (
                <div className="mb-4 font-medium text-sm text-green-600">
                    {status}
                </div>
            )}

            <form onSubmit={submit}>
                <div>
                    <InputLabel
                        forInput="email"
                        value={transData("form.login.email")}
                    />

                    <TextInput
                        id="email"
                        type="email"
                        name="email"
                        value={data.email}
                        className="mt-1 block w-full"
                        autoComplete="username"
                        isFocused={true}
                        handleChange={onHandleChange}
                    />

                    <InputError message={errors.email} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel
                        forInput="password"
                        value={transData("form.login.password")}
                    />

                    <TextInput
                        id="password"
                        type="password"
                        name="password"
                        value={data.password}
                        className="mt-1 block w-full"
                        autoComplete="current-password"
                        handleChange={onHandleChange}
                    />

                    <InputError message={errors.password} className="mt-2" />
                </div>

                <div className="block mt-4">
                    <label className="flex items-center">
                        <Checkbox
                            name="remember"
                            value={data.remember}
                            handleChange={onHandleChange}
                        />
                        <span className="ml-2 text-sm text-gray-600 dark:text-gray-400">
                            {transData("form.login.remember")}
                        </span>
                    </label>
                </div>

                <div className="flex items-center justify-end mt-4">
                    <Link
                        href={route("landing.index")}
                        as="button"
                        className="btn btn-success"
                    >
                        {transData("form.login.back")}
                    </Link>

                    <PrimaryButton className="ml-4" processing={processing}>
                        {transData("form.login.submit")}
                    </PrimaryButton>
                </div>
            </form>
        </GuestLayout>
    );
}
