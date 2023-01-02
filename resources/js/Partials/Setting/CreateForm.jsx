// Import Core Libraries
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

// Import Custom Components
import InputError from "../../Components/InputError";

export default function CreateForm({ app, errors }) {
    const [validated, setValidated] = useState(false);
    const [values, setValues] = useState({
        app_name: app.app_name,
        app_icon: null,
        meta_author: app.meta_author,
        meta_keywords: app.meta_keywords,
        meta_description: app.meta_description,
    });

    const handleChanges = (e) => {
        if (e.target.name === "app_icon") {
            const reader = new FileReader();

            reader.onload = function (e) {
                $(".show-app-image").attr("src", e.target.result);
            };

            reader.readAsDataURL(e.target.files[0]);

            setValues({
                ...values,
                [e.target.name]: e.target.files[0],
            });
        } else {
            setValues({
                ...values,
                [e.target.name]: e.target.value,
            });
        }
    };

    const handleSubmit = (e) => {
        const form = e.currentTarget;
        e.preventDefault();

        if (form.checkValidity() === false) {
            e.stopPropagation();
        }

        setValidated(true);
        Inertia.post(route("setting.store"), values);
    };

    return (
        <Form noValidate validated={validated} onSubmit={handleSubmit}>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="app_name">
                    {transData("form.setting.app_name")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="app_name"
                    onChange={handleChanges}
                    defaultValue={app.app_name}
                    required
                    autoFocus
                />
                <InputError message={errors.app_name} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="app_icon">
                    {transData("form.setting.app_icon")}
                </Form.Label>
                {app.app_icon ? (
                    <img
                        src={"/storage/image/" + app.app_icon}
                        alt={app.app_name}
                        className="show-app-image mb-3"
                        width={100}
                    />
                ) : (
                    <img className="show-app-image mb-3" width={100} />
                )}
                <Form.Control
                    type="file"
                    name="app_icon"
                    onChange={handleChanges}
                />
                <InputError message={errors.app_icon} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="meta_author">
                    {transData("form.setting.meta_author")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="meta_author"
                    onChange={handleChanges}
                    defaultValue={app.meta_author}
                    required
                    autoFocus
                />
                <InputError message={errors.meta_keywords} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="meta_keywords">
                    {transData("form.setting.meta_keywords")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="meta_keywords"
                    onChange={handleChanges}
                    defaultValue={app.meta_keywords}
                    required
                    autoFocus
                />
                <InputError message={errors.meta_keywords} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="meta_description">
                    {transData("form.setting.meta_description")}
                </Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="meta_description"
                    onChange={handleChanges}
                    defaultValue={app.meta_description}
                    required
                    autoFocus
                />
                <InputError
                    message={errors.meta_description}
                    className="mt-2"
                />
            </Form.Group>
            <Link
                href={route("setting.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.setting.back")}
            </Link>
            <Button variant="primary" type="submit">
                {transData("form.setting.submit")}
            </Button>
        </Form>
    );
}
