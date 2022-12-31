// Import Core Libraries
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

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
            <Form.Group className="mb-3" controlId="group">
                <Form.Label>{transData("form.translate.group")}</Form.Label>
                <Form.Control
                    type="text"
                    name="group"
                    placeholder={transData("form.translate.placeholder.group")}
                    onChange={handleChanges}
                    defaultValue={translate.group}
                    required
                    autoFocus
                />
                {errors.group && (
                    <div className="invalid-feedback">{errors.group}</div>
                )}
            </Form.Group>
            <Form.Group className="mb-3" controlId="key">
                <Form.Label>{transData("form.translate.key")}</Form.Label>
                <Form.Control
                    type="text"
                    name="key"
                    placeholder={transData("form.translate.placeholder.key")}
                    onChange={handleChanges}
                    defaultValue={translate.key}
                    required
                    autoFocus
                />
                {errors.key && (
                    <div className="invalid-feedback">{errors.key}</div>
                )}
            </Form.Group>
            <Form.Group className="mb-3" controlId="id">
                <Form.Label>{transData("form.translate.id")}</Form.Label>
                <Form.Control
                    type="text"
                    name="id"
                    placeholder={transData("form.translate.placeholder.id")}
                    onChange={handleChanges}
                    defaultValue={translate.text.id}
                    required
                    autoFocus
                />
                {errors.id && (
                    <div className="invalid-feedback">{errors.id}</div>
                )}
            </Form.Group>
            <Form.Group className="mb-3" controlId="en">
                <Form.Label>{transData("form.translate.en")}</Form.Label>
                <Form.Control
                    type="text"
                    name="en"
                    placeholder={transData("form.translate.placeholder.en")}
                    onChange={handleChanges}
                    defaultValue={translate.text.en}
                    required
                    autoFocus
                />
                {errors.en && (
                    <div className="invalid-feedback">{errors.en}</div>
                )}
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
