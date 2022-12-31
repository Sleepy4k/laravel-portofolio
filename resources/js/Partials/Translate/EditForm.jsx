// Import Core Libraries
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

// Import Custom Components
import InputError from "../../Components/InputError";

export default function EditForm({ translate, errors }) {
    const [validated, setValidated] = useState(false);
    const [values, setValues] = useState({
        group: translate.group,
        key: translate.key,
        id: translate.text.id,
        en: translate.text.en,
    });

    const handleChanges = (e) => {
        setValues({
            ...values,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e) => {
        const form = e.currentTarget;
        e.preventDefault();

        if (form.checkValidity() === false) {
            e.stopPropagation();
        }

        setValidated(true);

        updateTransData(
            translate.group + "." + translate.key,
            values.group + "." + values.key
        );

        Inertia.patch("/translate/" + translate.id, values);
    };

    return (
        <Form noValidate validated={validated} onSubmit={handleSubmit}>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="group">
                    {transData("form.translate.group")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="group"
                    placeholder={transData("form.translate.placeholder.group")}
                    onChange={handleChanges}
                    defaultValue={translate.group}
                    required
                    autoFocus
                />
                <InputError message={errors.group} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="key">
                    {transData("form.translate.key")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="key"
                    placeholder={transData("form.translate.placeholder.key")}
                    onChange={handleChanges}
                    defaultValue={translate.key}
                    required
                    autoFocus
                />
                <InputError message={errors.key} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="id">
                    {transData("form.translate.id")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="id"
                    placeholder={transData("form.translate.placeholder.id")}
                    onChange={handleChanges}
                    defaultValue={translate.text.id}
                    required
                    autoFocus
                />
                <InputError message={errors.id} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="en">
                    {transData("form.translate.en")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="en"
                    placeholder={transData("form.translate.placeholder.en")}
                    onChange={handleChanges}
                    defaultValue={translate.text.en}
                    required
                    autoFocus
                />
                <InputError message={errors.en} className="mt-2" />
            </Form.Group>
            <Link
                href={route("translate.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.translate.back")}
            </Link>
            <Button variant="primary" type="submit">
                {transData("form.translate.submit")}
            </Button>
        </Form>
    );
}
